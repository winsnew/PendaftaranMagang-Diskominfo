<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $manuser = User::where('role', 'mahasiswa')->get();
        return view('profile.manageadmin', compact('manuser'));
    }

    public function edit($id)
    {
        
        $user = User::find($id);
        

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $datas = DataMahasiswa::where('user_id', $user->id)->first();

        return view('profile.editforadmin', compact('user', 'datas'));
        
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $user->status = $request->input('status');
        $user->save();

        return redirect()->route('profile.manageadmin')->with('success', 'User status updated successfully.');
    }

    public function schedule()
    {
        return view('profile.inputjadwal');
    }
}
