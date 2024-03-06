<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $albums = Album::where('users_id', Auth::user()->id)->get();
        return view('Pages.Authorized.create', compact('categories', 'albums'));
    }

    public function postComment(Request $request)
    {
        $commentValidate = Validator::make(
            $request->all(),
            [
                'commentPost' => 'required|max:255',
                'idPost' => 'required'
            ]
        );

        if ($commentValidate->fails()) {
            return response()->json(['error', 'Failed to send comment!'], 401);
        }

        Comment::create([
            'photos_id' => $request->idPost,
            'users_id' => Auth::id(),
            'comment_fill' => $request->commentPost
        ]);
        $commentCount = Comment::where('photos_id', $request->idPost)->count();
        return response()->json(['success' => 'Comment sent successfully.', 'commentCount' => $commentCount]);
    }


    public function upload_post(Request $request)
    {
        $request->validate([
            'file-photo' => 'required|mimes:png,jpg,jpeg,svg|max:20480|image',
            'photo_title' => 'required|string|max:255',
            'photo_description' => 'nullable|string',
            'tagged_topics' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'albums_id' => 'nullable|exists:albums,id',
        ]);

        if ($request->hasFile('file-photo')) {
            $filePhoto = $request->file('file-photo');
            $extension = $filePhoto->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filePhoto->move('gallery', $filename);

            $tagTopics = $request->has('tagged_topics') ? explode(',', $request->tagged_topics) : null;

            $photo = new Photo();
            $photo->users_id = Auth::user()->id;
            $photo->file_location = $filename;
            $photo->photo_title = $request->photo_title;
            $photo->photo_description = $request->photo_description;
            $photo->category_id = $request->category_id;
            $photo->tag_topic = json_encode($tagTopics);
            $photo->albums_id = null;

            if ($request->has('albums_id')) {
                $photo->albums_id = $request->albums_id;
            }
            $photo->save();
            flash()->addSuccess('Post uploaded successfully');
        }
    }

    public function showPostModal($id)
    {
        $post = Photo::with('category')->find($id);
        $postCategory = Category::all();
        return view('Pages.Authorized.Modal.editModal', compact('post', 'postCategory'));
    }

    public function updatePost(Request $request, $id)
    {
        $request->validate([
            'photo_title' => 'required|string|max:255',
            'photo_description' => 'nullable|string',
            'tagged_topics' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);
        $post = Photo::findOrFail($id);
        $post->update([
            'photo_title' => $request->input('photo_title'),
            'photo_description' => $request->input('photo_description'),
            'tag_topic' => $request->input('tagged_topics'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->back()->with('success', 'Post successfully updated.');
    }

    public function deletePhoto(Request $request, $photoId)
    {
        try {
            $photo = Photo::findOrFail($photoId);
            $filePath = public_path('gallery/' . $photo->file_location);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $photo->delete();
            flash()->addSuccess('Photo deleted successfully.');
        } catch (\Exception $e) {
            flash()->addError('Error deleting photo.');
        }
    }
}
