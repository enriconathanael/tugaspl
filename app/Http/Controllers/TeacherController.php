<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Menampilkan halaman daftar teacher";
    }

    public function show(string $id)
    {
        return "Menampilkan teacher dengan ID: {$id}";
    }
    
    public function create()
    {
        return "Menampilkan halaman tambah teacher";
    }

    public function edit()
    {
        return "Menampilkan halaman edit teacher";
    }

    public function store()
    {
        return "Melakukan penambahan data teacher";
    }

    public function update()
    {
        return "Melakukan perubahan data teacher";
    }

    public function destroy()
    {
        return "Menghapus data teacher";
    }

}