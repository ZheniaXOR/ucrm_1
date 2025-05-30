<?php

namespace App\Http\Controllers\Api\V3;

use App\Http\Controllers\Controller;
use App\Models\Files;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Files::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'file_path' => 'required|string|max:256',
            'file_type' => 'required|string|max:8',
            'size' => 'nullable|integer',
            'date_created' => 'required|date',
            'hash' => 'nullable|string|max:256',
            'employee_id' => 'required|exists:employee,employee_id',
        ]);
        $file = Files::create($validated);
        return response()->json($file, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $file = Files::findOrFail($id);
        return response()->json($file);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $file = Files::findOrFail($id);

        $validated = $request->validate([
            'file_path' => 'string|max:256',
            'file_type' => 'string|max:8',
            'size' => 'nullable|integer',
            'date_created' => 'date',
            'hash' => 'nullable|string|max:256',
            'employee_id' => 'exists:employee,employee_id',
        ]);

        $file->update($validated);
        return response()->json($file);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $file = Files::findOrFail($id);
        $file->delete();

        return response()->json(['message' => 'File deleted']);
    }
}
