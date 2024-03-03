<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Follow;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        $created = Photo::with('userPhotos')->where('users_id', $id)->get();
        $profile = User::find($id);
        $userFavorites = Favorite::where('users_id', $id)->with('photosFavorite')->get();
        $dataAlbum = Album::where('users_id', Auth::user()->id)->get();
        return view('Pages.Authorized.Profile.profile', compact('created', 'profile', 'userFavorites', 'dataAlbum'));
    }

    public function myDetail($uuid)
    {
        // $post = Photo::with('userPhotos.followers')->find($id);
        // $post->isLiked = Like::isLiked($post->id, Auth::id());
        // $likeTotal = Like::where('photos_id', $id)->count();
        // $commentCount = Comment::where('photos_id', $id)->count();
        // $userAlbums = Album::with('photos')->where('users_id', Auth::user()->id)->get();
        // $postCategory = Category::all();

        $post = Photo::where('uuid', $uuid)->with('userPhotos.followers')->firstOrFail();
        $post->isLiked = Like::isLiked($post->id, Auth::id());
        $likeTotal = Like::where('photos_id', $post->id)->count();
        $commentCount = Comment::where('photos_id', $post->id)->count();
        $userAlbums = Album::with('photos')->where('users_id', Auth::user()->id)->get();
        $postCategory = Category::all();

        return view('Pages.Authorized.myDetail', compact('post', 'likeTotal', 'commentCount', 'userAlbums', 'postCategory'));
    }

    public function showComment($id)
    {
        $commentList = Comment::with('userPostComment')->where('photos_id', $id)->get();
        return view('Pages.Authorized.commentShow', compact('commentList'));
    }

    public function likes(Request $request)
    {
        $userId = Auth::id();
        $postId = $request->input('idPost');

        $existingLike = Like::where('users_id', $userId)
            ->where('photos_id', $postId)
            ->first();

        if ($existingLike) {
            $existingLike->delete();
            $action = 'unlike';
        } else {
            Like::create([
                'users_id' => $userId,
                'photos_id' => $postId,
            ]);
            $action = 'like';
        }
        $likeTotal = Like::where('photos_id', $postId)->count();
        return response()->json(['success' => true, 'action' => $action, 'likeTotal' => $likeTotal]);
    }

    public function toggleFollow(Request $request, $id)
    {
        $followingId = User::find($id);
        $isFollowing = Auth::user()->following()->toggle($id);

        $followerCount = $followingId->followers()->count();
        return response()->json([
            'following' => $isFollowing,
            'followerCount' => $followerCount
        ]);
    }

    public function checkFollowStatus($id)
    {
        $isFollowing = Auth::user()->following()->where('following_id', $id)->exists();

        return response()->json([
            'isFollowing' => $isFollowing
        ]);
    }

    public function profileFollow(Request $request)
    {
        $userId = $request->input('userId');
        $followingId = $request->input('followingId');
        $existingFollow = Follow::where('users_id', $userId)
            ->where('following_id', $followingId)
            ->first();

        if ($existingFollow) {
            $existingFollow->delete();
            return response()->json(['status' => 'unfollowed']);
        } else {
            Follow::create(['users_id' => $userId, 'following_id' => $followingId]);
            return response()->json(['status' => 'followed']);
        }
    }

    public function profileSetting($id)
    {
        $userData = User::find($id);
        $getGender = User::getGenders();
        return view('Pages.Authorized.Profile.editProfile', compact('userData', 'getGender'));
    }

    public function updateProfile(Request $request, $id)
    {

    }
}
