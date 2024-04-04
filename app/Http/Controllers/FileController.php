<?php

namespace App\Http\Controllers;

use App\Mail\ApproveFile;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
        // checks if the user has approved status
        if (auth()->check() && auth()->user()->status == 'Approved') {
            // calls the entire table values
            $user = User::all();
            $owner = auth()->user()->name;
            $files = File::where('owner', $owner)->get();
            return view('file_manager.register_files', compact('files', 'user'));
        } else {
            // Redirect or handle the case when the user is not authenticated
            return redirect()->route('home');
        }
    }

    public function upload(Request $request)
    {
        // Ensure the user is authenticated before accessing auth()->user()
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to upload files.');
        }

        // Verifies and validates input data
        $request->validate([
            'file' => 'required|mimes:doc,pdf,xls,xlsx,ppt,pptx,mp4,avi,mov|max:10240',
            'file_category' => 'required|string',
            'discussion_agenda' => 'nullable|string',
            'information_agenda' => 'nullable|string',
            'paper_no' => 'nullable|string|max:255',
        ], [
            'file.required' => 'Please select a file to upload.',
            'file.mimes' => 'Unsupported file format. Please upload a DOC, PDF, XLS, XLSX, PPT, or PPTX file.',
        ]);

        // Check if file exists in the request
        if (!$request->hasFile('file')) {
            return redirect()->back()->with('error', 'No file provided.');
        }

        $owner = auth()->user()->name;
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        // Save file to storage and database
        $path = $file->storeAs('public/conference/papers', $fileName);
        $size = $file->getSize();

        $createFile = new File();
        $createFile->fill([
            'paper_no' => $request->input('paper_no'),
            'name' => $fileName,
            'owner' => $owner,
            'upload_date' => now(),
            'size' => $size,
            'file_category' => $request->input('file_category'),
            'discussion_agenda' => $request->input('discussion_agenda'),
            'information_agenda' => $request->input('information_agenda'),
        ]);

        // Save File
        $createFile->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
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
            $user = User::all();
            $agendaFiles = File::where('file_category', 'Agenda')->get();

            // Pass the agendaFiles to the view
            return view('main.conference.agenda', ['agendaFiles' => $agendaFiles, 'user' => $user]);
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error($e);
            return redirect()->back()->with('error', 'An error occurred while fetching agenda files.');
        }
    }

    public function viewDiscussionPapers(Request $request)
    {
        $agenda1 = File::where('discussion_agenda', 'Agenda 1')->get();
        $agenda2 = File::where('discussion_agenda', 'Agenda 2')->get();
        $agenda3 = File::where('discussion_agenda', 'Agenda 3')->get();
        $agenda4 = File::where('discussion_agenda', 'Agenda 4')->get();
        $agenda5 = File::where('discussion_agenda', 'Agenda 5')->get();
        $agenda6 = File::where('discussion_agenda', 'Agenda 6')->get();
        $agenda7 = File::where('discussion_agenda', 'Agenda 7')->get();
        $agenda8 = File::where('discussion_agenda', 'Agenda 8')->get();
        $agenda9a = File::where('discussion_agenda', 'Agenda 9a')->get();
        $agenda9b = File::where('discussion_agenda', 'Agenda 9b')->get();
        $agenda10a = File::where('discussion_agenda', 'Agenda 10a')->get();
        $agenda10b = File::where('discussion_agenda', 'Agenda 10b')->get();
        $agenda10c = File::where('discussion_agenda', 'Agenda 10c')->get();
        $presentation = File::where('discussion_agenda', 'Presentation/Video')->get();

        return view('main.conference.documents.discussion_paper', compact(
            'agenda1',
            'agenda2',
            'agenda3',
            'agenda4',
            'agenda5',
            'agenda6',
            'agenda7',
            'agenda8',
            'agenda9a',
            'agenda9b',
            'agenda10a',
            'agenda10b',
            'agenda10c',
            'presentation'
        ));
    }
    public function viewInformationPapers(Request $request)
    {
        $agenda1 = File::where('information_agenda', 'Agenda 1')->get();
        $agenda2 = File::where('information_agenda', 'Agenda 2')->get();
        $agenda3 = File::where('information_agenda', 'Agenda 3')->get();
        $agenda4 = File::where('information_agenda', 'Agenda 4')->get();
        $agenda5 = File::where('information_agenda', 'Agenda 5')->get();
        $agenda6 = File::where('information_agenda', 'Agenda 6')->get();
        $agenda7 = File::where('information_agenda', 'Agenda 7')->get();
        $agenda8 = File::where('information_agenda', 'Agenda 8')->get();
        $agenda9a = File::where('information_agenda', 'Agenda 9a')->get();
        $agenda9b = File::where('information_agenda', 'Agenda 9b')->get();
        $agenda10a = File::where('information_agenda', 'Agenda 10a')->get();
        $agenda10b = File::where('information_agenda', 'Agenda 10b')->get();
        $agenda10c = File::where('information_agenda', 'Agenda 10c')->get();
        $presentation = File::where('information_agenda', 'Presentation/Video')->get();

        return view('main.conference.documents.information_paper', compact(
            'agenda1',
            'agenda2',
            'agenda3',
            'agenda4',
            'agenda5',
            'agenda6',
            'agenda7',
            'agenda8',
            'agenda9a',
            'agenda9b',
            'agenda10a',
            'agenda10b',
            'agenda10c',
            'presentation'
        ));
    }

    public function editFileName($id)
    {
        $user = Auth::user();
        $files = File::find($id);
        return view('file_manager.edit_files', compact('files', 'user'));
    }
    public function updateFileName(Request $request, $id)
    {
        $files = File::find($id);
        $oldFileName = $files->name;
        $newFileName = $request->input('name');
        $files->name = $newFileName;
        $files->doc_status = $request->input('doc_status');
        $files->save();

        // Rename the file in the file storage
        Storage::move('public/conference/' . $oldFileName, 'public/conference/' . $newFileName);

        return redirect()->route('files')->with('success', 'Item updated successfully');
    }

    public function viewSubmissionGuide()
    {
        return view('file_manager.submission_guide');
    }
    public function deleteFile(Request $request, $id)
    {
        // Find the meeting by its ID
        $file = File::findOrFail($id);

        // Delete the meeting
        $file->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Meeting deleted successfully.');
    }
}
