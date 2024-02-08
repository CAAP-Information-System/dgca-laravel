<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createNews()
    {
        return view('main.news.create_news');
    }

    public function registerNews(Request $request)
    {
        if (auth()->check()) {
            $request->validate([
                'news_title' => 'required|string',
                'news_description' => 'nullable|string',
                'news_image' => 'required|image|mimes:jpeg,jpg,png|max:10240',
            ], [
                'news_image.required' => 'No image provided.',
                'news_image.mimes' => 'Unsupported image format. Please upload a JPEG, JPG, or PNG file.',
            ]);

            $news_image = $request->file('news_image');
            $news_imageName = $news_image->getClientOriginalName();

            // Save news_image to storage and database
            $path = $news_image->storeAs('public/news_updates', $news_imageName);
            $size = $news_image->getSize();
            $newsTitle = $request->input('news_title');
            $newsDesc = $request->input('news_description');
            $newsCaption = $request->input('caption');

            News::create([
                'date_uploaded' => now(),
                'news_title' => $newsTitle,
                'news_description' => $newsDesc,
                'news_image' => $news_imageName,
                'caption' => $newsCaption,

            ]);

            // Include the news_image name in the success message
            return redirect()->route('news')->with('success', 'News uploaded successfully.');
        } else {
            // Redirect or handle the case when the user is not authenticated
            return redirect()->route('login');
        }
    }
}
