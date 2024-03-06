<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index()
    {
        return view('Pages.Authorized.makeAlbums');
    }

    public function store(Request $request)
    {
        $usersId = Auth::user()->id;
        $request->validate([
            'albumWallpaperFile' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'albumTitle' => 'required|string|max:25',
            'albumDescription' => 'nullable|string|max:100'
        ]);

        if($request->hasFile('albumWallpaperFile')){
            $filePhoto = $request->file('albumWallpaperFile');
            $extension = $filePhoto->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filePhoto->move('albumWallpaper', $filename);

            Album::create([
                'album_name' => $request->albumTitle,
                'album_description' => $request->albumDescription,
                'album_wallpaper' => $filename,
                'users_id' => $usersId
            ]);

            return redirect("/profile/{$usersId}")->with('success', 'The album was successfully created.');
        }
        return back()->with('error', 'Album failed to add! check the error message.');
    }

    public function showAlbumDetail($id)
    {
        $albumPhoto = Album::with('photos')->find($id);
        return view('Pages.Authorized.albumPage', compact('albumPhoto'));
    }

    public function addPhotoToAlbum(Request $request, $albumId, $photoId)
    {
        $album = Album::findOrFail($albumId);
        Photo::where('id', $photoId)->update([
            'albums_id' => $album->id
        ]);
        return response()->json(['success' => true]);
    }

    public function addAlbum(Request $request)
    {
        $usersId = Auth::user()->id;
        $request->validate([
            'albumWallpaperFile' => 'required|image|mimes:png,jpg,jpeg|max:10480',
            'albumTitle' => 'required|string|max:25',
            'albumDescription' => 'nullable|string|max:100',
        ]);

        if ($request->hasFile('albumWallpaperFile')) {
            $filePhoto = $request->file('albumWallpaperFile');
            $extension = $filePhoto->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $filePhoto->move('albumWallpaper', $filename);

            $album = Album::create([
                'album_name' => $request->albumTitle,
                'album_description' => $request->albumDescription,
                'album_wallpaper' => $filename,
                'users_id' => $usersId,
            ]);

            return response()->json(['success' => 'Album created successfully', 'album' => $album]);
        }

        return response()->json(['error' => 'Failed to add album. Please check the error message.'], 422);
    }

    public function updateAlbum(Request $request, $id)
    {

    }
}
