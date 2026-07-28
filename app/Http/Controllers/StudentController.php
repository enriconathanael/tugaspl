<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "Menampilkan siswa dengan ID: {$id}";
    }
    
    public function create()
    {
        return "Menampilkan halaman tambah siswa";
    }

    public function edit()
    {
        return "Menampilkan halaman edit siswa";
    }

    public function store()
    {
        return "Melakukan penambahan data siswa";
    }

    public function update()
    {
        return "Melakukan perubahan data siswa";
    }

    public function destroy()
    {
        return "Menghapus data siswa";
    }

}
