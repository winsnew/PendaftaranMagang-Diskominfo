<?php

namespace App\Http\Controllers;

use App\Models\DataMahasiswa;
use App\Models\Pengumuman;
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
            'status' => 'required|in:Diterima,Menunggu',
        ]);

        $user->status = $request->input('status');
        $user->save();

        return redirect()->route('profile.manageadmin')->with('success', 'User status updated successfully.');
    }

    public function schedule()
    {
        $siswa = User::where('status','Lulus')->get();


        return view('profile.inputjadwal', compact('siswa'));
    }

    public function editjadwal($id)
    {
        $user = User::find($id);


        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }
        return view('profile.jadwalcontrol', compact('user'));
    }
    public function simpan(Request $request, $id)
    {
        $siswa = User::find($id);
        $request->validate([
            'keterangantempat' => 'required',
            'tanggal' => 'required|date',
            'tanggalselesai' => 'required|date',
        ]);

        // Simpan data jadwal ke dalam database
        $jadwal = new Pengumuman([
            'user_id' => $id, // Asumsikan ada kolom siswa_id di tabel jadwal untuk mengaitkan jadwal dengan siswa
            'keterangantempat' => $request->keterangantempat,
            'tanggal' => $request->tanggal,
            'tanggalselesai' => $request->tanggalselesai,
        ]);
        $siswa->pengumuman()->save($jadwal);
        
       

        return redirect()->route('profile.inputjadwal')->with('success', 'User status updated successfully.');
    }

    public function download($id)
    {
        $data = DataMahasiswa::where('user_id', $id)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Data Mahasiswa not found.');
        }
    
        $pdfPath = $data->file_path; // Ganti 'file_path' dengan kolom yang sesuai dalam model DataMahasiswa yang menyimpan path ke file PDF
    
        return response()->download(storage_path('app/public/' . $pdfPath));
    }
}
