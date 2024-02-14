<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryPostingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function viewGalleryForm(Request $request)
    {
        return view('main.gallery.add_gallery');
    }
    public static function formatFileSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size > 1024; $i++) {
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }
    public function registerImage(Request $request)
    {
        if (auth()->check()) {
            $request->validate([
                'img_title' => 'required|string',
                'img_file' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            ], [
                'img_file.required' => 'No image provided.',
                'img_file.mimes' => 'Unsupported image format. Please upload a JPEG, JPG, or PNG file.',
            ]);

            $img_file = $request->file('img_file');
            $img_fileName = $img_file->getClientOriginalName();

            // Save img_file to storage and database
            $path = $img_file->storeAs('public/gallery', $img_fileName);
            $size = $img_file->getSize();
            $imgTitle = $request->input('img_title');

            Gallery::create([
                'date_uploaded' => now(),
                'img_title' => $imgTitle,
                'img_file' => $img_fileName,
                'img_size' => $size,

            ]);

            // Include the img_file name in the success message
            return redirect()->route('the-gallery')->with('success', 'Image uploaded successfully.');
        } else {
            // Redirect or handle the case when the user is not authenticated
            return redirect()->route('login');
        }
    }
}
