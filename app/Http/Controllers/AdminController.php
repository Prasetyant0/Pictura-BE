<?php

namespace App\Http\Controllers;

use App\Models\Account_report;
use App\Models\Photo;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Post_report;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function newCategoryStore(Request $request)
    {
        $request->validate([
            'photo_category' => 'required|image|mimes:png,jpg,jpeg|max:10480',
            'category_title' => 'required|string|unique:categories,category_title'
        ]);

        if ($request->hasFile('photo_category')) {
            $filePhoto = $request->file('photo_category');
            $extension = $filePhoto->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filePhoto->move('categories_photo', $filename);

            Category::create([
                'photo' => $filename,
                'category_title' => $request->category_title
            ]);

            flash()->addSuccess('Category created successfully.');

            if ($request->ajax()) {
                $categories = Category::all();
                $totalCategories = $categories->count();
                return response()->json([
                    'category' => [
                        'number' => $totalCategories,
                        'title' => $request->category_title,
                    ],
                    'success' => 'Category saved successfully',
                ]);
            } else {
                return redirect()->back();
            }
        }

        flash()->addError('Error creating a new category.');
        return redirect()->back();
    }

    public function deleteCategory(Request $request, $id)
    {
        try {
            $categories = Category::findOrFail($id);
            $filePath = public_path('category_photo/' . $categories->photo);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $categories->delete();
            return redirect('/admin/category-post')->with('success', 'Category deleted successfully.');
        } catch (\Exception $e) {
            return redirect('/admin/category-post')->with('error', 'Error deleting category.');
        }
    }

    public function categoryPost()
    {
        $categories = Category::all();
        return view('Admin.category-post', compact('categories'));
    }

    public function postReportList()
    {
        $postReport = Post_report::with(['photo', 'reporter'])->get();
        return view('Admin.postReport', compact('postReport'));
    }

    public function previewPost($id)
    {
        $post = Photo::with(['userPhotos', 'userPhotos.followers'])->find($id);
        $commentList = Comment::where('photos_id', $post->id)->get();
        return view('Admin.previewPost', compact('post', 'commentList'));
    }

    public function takeDown($id)
    {
        $photo = Photo::findOrFail($id);
        $photo->update(['visibility' => 0]);
        return redirect()->back()->with('success', 'Post takedown successfully.');
    }

    public function accountReportList()
    {
        $accountReport = Account_report::with(['reportedUser', 'reporter'])->get();
        return view('Admin.accountReport', compact('accountReport'));
    }
}
