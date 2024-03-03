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
        $posts = Photo::with(['userPhotos'])
            ->whereHas('userPhotos', function ($query) {
                $query->where('account_status', 1)->where('role', 'user');
            })
            ->orderby('created_at', 'desc')->get();
        return view('Pages.Authorized.home', compact('posts'));
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
        $post->isLiked = Like::isLiked($post->id, Auth::id());
        $likeTotal = Like::where('photos_id', $post->id)->count();
        $commentCount = Comment::where('photos_id', $post->id)->count();
        return view('Pages.Authorized.detailAuth', compact('post', 'likeTotal', 'commentCount'));
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

            return response()->json(['message' => 'Successfully added to favorites']);
        }

        return response()->json(['message' => 'Already in favorites']);
    }
}
