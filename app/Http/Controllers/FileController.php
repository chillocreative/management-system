<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        
        if ($user->role === 'admin') {
            // Admin can see all files
            $files = File::with('user')->latest()->paginate(15);
        } else {
            // Regular users can see all files but with limited actions
            $files = File::with('user')->latest()->paginate(15);
        }

        return view('files.index', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debug: Log the request data
        \Log::info('File upload request received', [
            'has_file' => $request->hasFile('file'),
            'all_data' => $request->all(),
            'files' => $request->allFiles(),
        ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'file' => 'required|file|max:10240', // 10MB max
        ]);

        try {
            $file = $request->file('file');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            
            // Debug: Log file details
            \Log::info('File details', [
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension(),
            ]);
            
            // Store the file
            $path = $file->storeAs('uploads', $filename, 'public');
            
            // Debug: Log storage path
            \Log::info('File stored at', ['path' => $path]);

            // Create file record
            $fileRecord = File::create([
                'title' => $request->title,
                'description' => $request->description,
                'filename' => $filename,
                'original_filename' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'file_size' => $file->getSize(),
                'user_id' => Auth::id(),
            ]);
            
            // Debug: Log created record
            \Log::info('File record created', ['id' => $fileRecord->id]);

            return redirect()->route('files.index')->with('success', 'File uploaded successfully!');
        } catch (\Exception $e) {
            // Debug: Log any errors
            \Log::error('File upload error', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);
            
            return back()->withErrors(['file' => 'File upload failed: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(File $file)
    {
        return view('files.show', compact('file'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(File $file)
    {
        if (!$file->canEdit(Auth::user())) {
            abort(403, 'You do not have permission to edit this file.');
        }

        return view('files.edit', compact('file'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, File $file)
    {
        if (!$file->canEdit(Auth::user())) {
            abort(403, 'You do not have permission to edit this file.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        $file->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('files.index')->with('success', 'File updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(File $file)
    {
        if (!$file->canDelete(Auth::user())) {
            abort(403, 'You do not have permission to delete this file.');
        }

        // Delete the physical file
        Storage::disk('public')->delete('uploads/' . $file->filename);
        
        // Delete the database record
        $file->delete();

        return redirect()->route('files.index')->with('success', 'File deleted successfully!');
    }

    /**
     * Download the specified file.
     */
    public function download(File $file)
    {
        $path = 'uploads/' . $file->filename;
        
        if (!Storage::disk('public')->exists($path)) {
            abort(404, 'File not found.');
        }

        return Storage::disk('public')->download($path, $file->original_filename);
    }


}
