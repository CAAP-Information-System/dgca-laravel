<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
    public function __construct()
    {
        // Log to check if the middleware is being applied
        Log::info('FileController constructor');

        $this->middleware('auth'); // Apply auth middleware to the entire controller
    }

    public static function formatFileSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $size > 1024; $i++) {
            $size /= 1024;
        }

        return round($size, 2) . ' ' . $units[$i];
    }


    public function registerDocument()
    {
        // Ensure the user is authenticated before accessing auth()->user()
        if (auth()->check()) {
            $owner = auth()->user()->name;
            $files = File::where('owner', $owner)->get();
            return view('file_manager.register_files', compact('files'));
        } else {
            // Redirect or handle the case when the user is not authenticated
            return redirect()->route('login');
        }
    }


    public function upload(Request $request)
    {
        try {
            // Ensure the user is authenticated before accessing auth()->user()
            if (auth()->check()) {
                $owner = auth()->user()->name;

                Log::info('FileManagerController@upload');

                $request->validate([
                    'file' => 'required|mimes:doc,pdf|max:10240',
                    'file_category' => 'required|string',

                ]);

                if (!$request->hasFile('file')) {
                    return redirect()->back()->with('error', 'No file provided.');
                }

                $file = $request->file('file');
                $fileName = $file->getClientOriginalName();

                // Save file to storage and database
                $path = $file->storeAs('public/conference', $fileName);
                $size = $file->getSize();
                $fileCategories = $request->input('file_category');
                $createdFile = File::create([
                    'name' => $fileName,
                    'owner' => $owner,
                    'upload_date' => now(),
                    'size' => $size,
                    'file_category' => $fileCategories,

                ]);

                // Log the created file details for debugging
                Log::info('File created: ' . $createdFile);

                // Include the file name in the success message
                return redirect()->back()->with('success', 'File "' . $fileName . '" uploaded successfully.');
            } else {
                // Redirect or handle the case when the user is not authenticated
                return redirect()->route('login');
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error($e);
            return redirect()->back()->with('error', 'An error occurred during file upload.');
        }
    }



    public function viewFiles()
    {
        $allFiles = File::all();
        return view('file_manager.view_files', ['files' => $allFiles]);
    }
    public function delete($id)
    {
        $file = File::find($id);

        if (!$file) {
            return redirect()->back()->with('error', 'File not found.');
        }

        // Delete file from storage
        Storage::delete('uploads/' . $file->name);

        // Delete file record from the database
        $file->delete();

        return redirect()->back()->with('success', 'File deleted successfully.');
    }

    public function view($id)
    {
        try {
            $file = File::findOrFail($id);

            // Optional: Check permissions if needed
            // if ($file->owner !== auth()->user()->name) {
            //     abort(403, 'Unauthorized access to view this file.');
            // }

            return response()->file(storage_path("public/conference/{$file->name}"));
        } catch (\Exception $e) {
            Log::error($e);
            return redirect()->back()->with('error', 'An error occurred while trying to view the file.');
        }
    }
    public function download(File $file)
    {
        $filePath = Storage::url('conference/' . $file->name);

        return response()->download(public_path($filePath), $file->name);
    }

    public function agendaFiles()
    {
        try {
            // Retrieve files with file_category equal to "Agenda"
            $agendaFiles = File::where('file_category', 'Agenda')->get();

            // Pass the agendaFiles to the view
            return view('main.conference.agenda', ['agendaFiles' => $agendaFiles]);
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error($e);
            return redirect()->back()->with('error', 'An error occurred while fetching agenda files.');
        }
    }

}
