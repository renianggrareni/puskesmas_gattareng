<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        Gallery::create([
            'title' => $request->title,
            'image' => $imageName,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $gallery->update([
            'title' => $request->title,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if (file_exists(public_path('images/' . $gallery->image))) {
            unlink(public_path('images/' . $gallery->image));
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfully.');
    }
    
    public function saveManifestFile($content)
    {
    Storage::disk('vite')->put('manifest.json', $content);
    }

    public function getManifestFile()
    {
    $content = Storage::disk('vite')->get('manifest.json');
    return $content;
    }
}

