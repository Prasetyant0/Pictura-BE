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
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index($id)
    {
        $created = Photo::with('userPhotos')->where('users_id', $id)->get();
        $profile = User::find($id);
        $followers = $profile->followers;
        $following = $profile->following;
        $userFavorites = Favorite::where('users_id', $id)->with('photosFavorite')->get();
        $dataAlbum = Album::where('users_id', Auth::user()->id)->get();
        return view('Pages.Authorized.Profile.profile', compact('created', 'profile', 'userFavorites', 'dataAlbum', 'followers', 'following'));
    }

    public function myDetail($uuid)
    {
        $post = Photo::where('uuid', $uuid)->with('userPhotos.followers')->firstOrFail();
        $postGroupCategory = Photo::with(['userPhotos'])->where('category_id', $post->category_id)
        ->where('users_id', Auth::user()->id)
        ->where('uuid', '!=', $uuid)
            ->orderby('created_at', 'desc')->get();
        $post->isLiked = Like::isLiked($post->id, Auth::id());
        $likeTotal = Like::where('photos_id', $post->id)->count();
        $commentCount = Comment::where('photos_id', $post->id)->count();
        $userAlbums = Album::with('photos')->where('users_id', Auth::user()->id)->get();
        $postCategory = Category::all();
        return view('Pages.Authorized.myDetail', compact('post', 'likeTotal', 'commentCount', 'userAlbums', 'postCategory', 'postGroupCategory'));
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
        $request->validate([
            'photo_profile' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'fullName' => 'nullable|string',
            'bio' => 'nullable|string|max:500',
            'username' => 'nullable|string|unique:users,username'
        ]);

        if (Auth::user()->id != $id) {
            return redirect()->back()->with('error', "You are not authorized to update this profile.");
        }

        if ($request->hasFile('photo_profile')) {
            $filePhoto = $request->file('photo_profile');
            $extension = $filePhoto->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filePhoto->move('profile_photos/', $filename);

            Auth::user()->update([
                'photo_profile' => $filename
            ]);
        }
        Auth::user()->update([
            'fullName' => $request->input('fullName'),
            'username' => $request->input('username'),
            'bio' => $request->input('bio'),
        ]);
        return redirect()->back()->with('success', "Your Profile has been updated successfully!");
    }

    public function accountUpdate(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email',
            'birthdate' => 'nullable|date',
            'gender' => 'nullable|string',
        ]);

        if (Auth::user()->id != $id) {
            return redirect()->back()->with('error', "You are not authorized to update this account.");
        }

        $user = Auth::user();
        $user->email = $request->input('email');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');

        if ($request->has('deactivate_account')) {
            $user->account_status = $request->input('deactivate_account');
        }

        $user->save();

        return redirect()->back()->with('success', "Your account has been updated successfully!");
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required'
        ]);

        if (Auth::user()->id != $id) {
            return redirect()->back()->with('error', "You are not authorized to update this account.");
        }

        $user = Auth::user();

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', 'Old password is incorrect');
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect()->back()->with('success', 'Password changed successfully');
    }
}
