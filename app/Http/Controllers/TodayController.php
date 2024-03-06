<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Photo;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class TodayController extends Controller
{
    public function index()
    {
        $categoryGroup = Category::all();
        $date = Carbon::now()->format('F j, Y');
        return view('Pages.Authorized.today', compact('categoryGroup', 'date'));
    }

    public function detailCategory($id)
    {
        $category = Category::find($id);
        $categoryName = $category ? $category->category_title : null;

        $imageShow = $category ? $category->photos : collect();

        return view('Pages.Authorized.imageTodayKlik', compact('imageShow', 'categoryName'));
    }

    public function dataExplore()
    {
        $postPhoto =
            Photo::with('userPhotos')
            ->whereHas('userPhotos', function ($query) {
                $query->where('account_status', 1)->where('role', 'user');
            })
            ->orderby('created_at', 'desc')->get();
        return view('Pages.explore', compact('postPhoto'));
    }

    public function detailPostExplore($uuid)
    {
        $post = Photo::where('uuid', $uuid)->with('userPhotos.followers')->firstOrFail();
        $postGroupCategory = Photo::with(['userPhotos'])->where('category_id', $post->category_id)
            ->where('uuid', '!=', $uuid)
            ->where('visibility', 1)
            ->whereHas('userPhotos', function ($query) {
                $query->where('account_status', 1)->where('role', 'user');
            })
            ->orderby('created_at', 'desc')->get();
        $post->isLiked = Like::isLiked($post->id, Auth::id());
        $likeTotal = Like::where('photos_id', $post->id)->count();
        $commentCount = Comment::where('photos_id', $post->id)->count();
        return view('Pages.detailNoAuth', compact('post', 'likeTotal', 'commentCount', 'postGroupCategory'));
    }
}
