<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Photo;
use App\Models\Comment;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Photo::with(['userPhotos'])->where('deleted_at', null)
        ->where('visibility', 1)
            ->whereHas('userPhotos', function ($query) {
                $query->where('account_status', 1)->where('role', 'user');
            })
            ->orderby('created_at', 'desc')->get();
        return view('Pages.Authorized.home', compact('posts'));
    }

    public function restorePost($id)
    {
        $photo = Photo::withTrashed()->find($id);

        if ($photo) {
            $photo->restore();
            return redirect()->back()->with('success', 'Post restored successfully.');
        } else {
            return redirect()->back()->with('error', 'Post not found.');
        }
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $posts = DB::select('CALL search_photos(?)', [$searchTerm]);
        return response()->json($posts);
    }

    public function detailPostHome($uuid)
    {
        $post = Photo::where('uuid', $uuid)->with('userPhotos.followers')->firstOrFail();
        $postGroupCategory = Photo::with(['userPhotos'])->where('category_id', $post->category_id)
            ->where('uuid', '!=', $uuid)
            ->whereHas('userPhotos', function ($query) {
                $query->where('account_status', 1)->where('role', 'user');
            })
            ->orderby('created_at', 'desc')->get();
        $post->isLiked = Like::isLiked($post->id, Auth::id());
        $likeTotal = Like::where('photos_id', $post->id)->count();
        $commentCount = Comment::where('photos_id', $post->id)->count();
        return view('Pages.Authorized.detailAuth', compact('post', 'likeTotal', 'commentCount', 'postGroupCategory'));
    }

    public function download($id)
    {
        $photo = Photo::findOrFail($id);
        $path = public_path('gallery/' . $photo->file_location);
        return response()->download($path);
    }

    public function addToFavorite(Request $request)
    {
        $userId = Auth::user()->id;
        $photoId = $request->input('photos_id');

        $favorite = Favorite::where('users_id', $userId)
            ->where('photos_id', $photoId)
            ->first();

        if (!$favorite) {
            Favorite::create([
                'users_id' => $userId,
                'photos_id' => $photoId,
            ]);

            return response()->json(['message' => 'Successfully added to favorites', 'action' => 'add']);
        } else {
            $favorite->delete();

            return response()->json(['message' => 'Removed from favorites', 'action' => 'remove']);
        }
    }
}
