<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function dashboard()
    {
        $newspost = News::all();
        return view('media-admin.dashboard', compact('newspost'));
    }

    public function edit(Request $request, $id)
    {
        $newspost = News::find($id);
        return view('media-admin.edit-news', compact('newspost'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'news_title' => 'required|string|max:255',
            'news_description' => 'nullable|string',
        ]);

        // Find the article by its ID
        $article = News::findOrFail($id);

        // Update the article with the new data
        $article->update([
            'news_title' => $request->news_title,
            'news_description' => $request->news_description,
        ]);

        // Redirect back to the article page with a success message
        return redirect()->route('media-dashboard')->with('success', 'Article updated successfully.');
    }

    public function delete($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('media-dashboard')->with('success', 'News post deleted successfully.');
    }
}
