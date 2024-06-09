<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        // Get pengaduan records for the authenticated user
        $data = Pengaduan::where('user_id', Auth::id())->get();
        return view('pengaduan.index', compact('data'));
    }
    
    public function create()
    {
        return view('pengaduan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $data = $request->except(['_token', 'submit']);
        $data['user_id'] = Auth::id();  // Set the user_id to the authenticated user's ID
        $data['status'] = 'pending';

        Pengaduan::create($data);

        return redirect('/pengaduan')->with('success', 'Pengaduan created successfully.');
    }

    public function edit($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        // Ensure the pengaduan belongs to the authenticated user
        if ($pengaduan->user_id !== Auth::id()) {
            return redirect('/pengaduan')->with('error', 'Unauthorized access.');
        }

        return view('pengaduan.edit', compact('pengaduan'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $pengaduan = Pengaduan::findOrFail($id);

        // Ensure the pengaduan belongs to the authenticated user
        if ($pengaduan->user_id !== Auth::id()) {
            return redirect('/pengaduan')->with('error', 'Unauthorized access.');
        }

        $data = $request->except(['_token', 'submit']);
        $pengaduan->update($data);

        return redirect('/pengaduan')->with('success', 'Pengaduan updated successfully.');
    }

    public function destroy($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        // Ensure the pengaduan belongs to the authenticated user
        if ($pengaduan->user_id !== Auth::id()) {
            return redirect('/pengaduan')->with('error', 'Unauthorized access.');
        }

        $pengaduan->delete();

        return redirect('/pengaduan')->with('success', 'Pengaduan deleted successfully.');
    }
}
