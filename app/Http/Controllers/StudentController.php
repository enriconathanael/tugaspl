<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function show(string $id)
    {
        $title = 'sistem sekolah - detail siswa';
        return view('students.show');
    }
    
    public function create()
    {
        $title = 'sistem sekolah - detail siswa';
        return view('students.create');
    }

    public function edit()
    {
        $title = 'sistem sekolah - detail siswa';
        return view('students.edit');
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
