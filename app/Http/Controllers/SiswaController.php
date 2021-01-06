<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SiswaController extends Controller
{
    public function index()
    {
      // mengambil data dari table siswa
      $siswa = DB::table('siswa')->get();

      // mengirim data pegawai ke view index
      return view('index',['siswa' => $siswa]);

    }

    public function tambah()
   {

  // memanggil view tambah
  return view('tambah');

   }

   // method untuk insert data ke table siswa
   public function store(Request $request)
   {
     // insert data ke table siswa
      DB::table('siswa')->insert([
      'siswa_nama' => $request->nama,
       'siswa_kelas' => $request->kelas,
       'siswa_umur' => $request->umur,
       'siswa_alamat' => $request->alamat
      ]   );
      // alihkan halaman ke halaman siswa
      return redirect('/siswa');

    }


    public function edit($id)
   {
       // mengambil data siswa berdasarkan id yang dipilih
       $siswa = DB::table('siswa')->where('siswa_id',$id)->get();
       // passing data siswa yang didapat ke view edit.blade.php
       return view('edit',['siswa' => $siswa]);

    }

    public function hapus($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        DB::table('siswa')->where('siswa_id',$id)->delete();

        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }

    public function update(Request $request)
    {
     // update data siswa
     DB::table('siswa')->where('siswa_id',$request->id)->update([
     'siswa_nama' => $request->nama,
     'siswa_kelas' => $request->kelas,
     'siswa_umur' => $request->umur,
     'siswa_alamat' => $request->alamat
      ]);
     // alihkan halaman ke halaman siswa
      return redirect('/siswa');
    }

}