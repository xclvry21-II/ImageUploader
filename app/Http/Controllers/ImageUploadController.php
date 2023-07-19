<?php

namespace App\Http\Controllers;

use App\Models\ImageUpload;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('imageuploader.index', [
            'title' => "Image Uploader | Index",
            'images' => ImageUpload::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|max:2048',
            'description' => 'required'
        ]);

        ImageUpload::create([
            'image' => $this->storeImage($request),
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', "Image uploaded successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $data = ImageUpload::findOrFail($request->id);

        return view('imageuploader.show', [
            'title' => "Image Uploader | Show",
            'imageupload' => $data
        ]);
    }

    private function storeImage($request)
    {
        $name = now()->timestamp . ".{$request->image->getClientOriginalName()}";
        $path = $request->file('image')->storeAs('uploads', $name, 'public');

        return $path;
    }
}
