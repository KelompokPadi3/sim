<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Status; 
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::orderBy('id', 'asc')->get();
        $total = Mahasiswa::count();
        return view('mahasiswa.home', compact(['mahasiswas', 'total']));
    }
    public function create()
    {
        $status = Status::all();
        return view('mahasiswa.create', compact('status'));
    }
    // public function save(Request $request)
    // {
    //     $validation = $request->validate([
    //         'nama_mahasiswa' => 'required',
    //         'alamat_mahasiswa' => 'required',
    //         'nomor_telepon' => 'required',
    //         'email_mahasiswa' => 'required',
    //         'tempat_lahir' => 'required',
    //         'tanggal_lahir' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'status_id' => 'required'
    //     ]);
    //     $data = Mahasiswa::create($validation);
    //     echo $data;
    //     if ($data) {
    //         session()->flash('success', 'Data Mahasiswa Telah Ditambahkan');
    //         return redirect(route('mahasiswa'));
    //     } else {
    //         session()->flash('error', 'Cek Kembali Data Anda');
    //         return redirect(route('create'));
    //     }
    // }
    public function save(Request $request)
{
    $validation = $request->validate([
        'nama_mahasiswa' => 'required',
        'alamat_mahasiswa' => 'required',
        'nomor_telepon' => 'required',
        'email_mahasiswa' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'status_id' => 'required' // Ubah 'status_id' sesuai dengan nama input field untuk id status
    ]);

    // Ambil id status dari request
    $statusId = $request->input('status_id');

    // Cari data status berdasarkan id
    $status = Status::find($statusId);

    // Jika data status tidak ditemukan, kembalikan response error
    if (!$status) {
        session()->flash('error', 'Status tidak valid');
        return redirect(route('create'));
    }

    // Buat array data dengan nilai status yang sudah ditemukan
    $data = $validation;
    $data['status'] = $status->status;

    // Simpan data mahasiswa ke dalam basis data
    $newMahasiswa = Mahasiswa::create($data);

    // Cek apakah data berhasil disimpan
    if ($newMahasiswa) {
        session()->flash('success', 'Data Mahasiswa Telah Ditambahkan');
        return redirect(route('mahasiswa'));
    } else {
        session()->flash('error', 'Cek Kembali Data Anda');
        return redirect(route('create'));
    }
}
    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('mahasiswa.update', compact('mahasiswas'));
    }

    public function delete($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id)->delete();
        if ($mahasiswas) {
            session()->flash('success', 'Berhasil Menghapus Data');
            return redirect(route('mahasiswa'));
        } else {
            session()->flash('error', 'Data Gagal Dihapus');
            return redirect(route('mahasiswa'));
        }
    }
    public function update(Request $request, $id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        $nama_mahasiswa = $request->nama_mahasiswa;
        $alamat_mahasiswa = $request->alamat_mahasiswa;
        $nomor_telepon = $request->nomor_telepon;
        $email_mahasiswa = $request->email_mahasiswa;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;

        $mahasiswas->nama_mahasiswa = $nama_mahasiswa;
        $mahasiswas->alamat_mahasiswa = $alamat_mahasiswa;
        $mahasiswas->nomor_telepon = $nomor_telepon;
        $mahasiswas->email_mahasiswa = $email_mahasiswa ;
        $mahasiswas->tempat_lahir = $tempat_lahir;
        $mahasiswas->tanggal_lahir = $tanggal_lahir;
        $mahasiswas->jenis_kelamin = $jenis_kelamin;
        $data = $mahasiswas->save();
        if ($data) {
            session()->flash('success', 'Update Data Sukses');
            return redirect(route('mahasiswa'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('update'));
        }
    }
}
