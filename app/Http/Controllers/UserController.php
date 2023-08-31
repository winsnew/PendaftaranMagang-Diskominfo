<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DataMahasiswa;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('profile.manageuser');
    }

    public function admin()
    {
        $manageuser = User::all();
        return view('profile.manageadmin', ['viewdata' => $manageuser]);
    }

    public function update( Request $request)
    {
        $validatedData = $request->validate([
            'users_id' => 'required|exists:users,id',
            'status' => 'required'
        ]);
        $manuser = User::findOrFail($validatedData['users_id']);
        $manuser->status = $validatedData['status'];
        $manuser->save();
        

        return redirect()->back()->with('success', 'User data has been updated successfully');
    }

    

    public function store(Request $request)
    {
        $user = auth()->user();
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'Instansi' => 'required',
            'jurusan' => 'required',
            'semester' => 'required',
            'nohp' => 'required',
            'file' => 'required',
        ]);
       
        $data = new DataMahasiswa($validatedData);
        $data->user_id = $user->id;
        $data->save();

        // Mengubah status input_success menjadi true
        $user->sesi = true;
        $user->save();


        return redirect()->route('profile.manageuser');
    }

    public function pengumuman()
    {
        $user = auth()->user();
        $datas = DataMahasiswa::where('user_id', $user->id)->get();
        return view('profile.hasiluser', compact(['datas']));
    }

    public function lihatjadwal()
    {
        return view('profile.pengumuman');
    }
}
