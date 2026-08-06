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
                'name' => 'Wilson',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Enrico',
                'class' => 'X TKJ 2',
                'major' => 'TKJ'
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Louis',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ]
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students,
 
        ]);
    }
    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', [
            'title'=> $title
        ]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Menambah Siswa';
        return view ('students.create', [
            'title'=> $title
        ]);
    }
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit data Siswa';
        return view ('students.edit', [
            'title'=> $title
        ]);
    }
    public function store()
    {
        return "Menampilkan halaman penambahan data siswa";
    }
    public function update(string $id)
    {
        return "Melakukan perubahan data siswa";
    }
    public function delete(string $id)
    {
        return "menghapus data siswa";
    }
}  
 
 