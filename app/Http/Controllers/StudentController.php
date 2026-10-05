<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $students = Student::select(['id', 'nis', 'name', 'class', 'major'])->get();

        return view('students.index', [
            'title' => $title,
            'students' => $students
        ] );
    }

    public function show(Student $student){
        $title = "Sistem Sekolah - Detail Siswa";
        return view('students.show', [
            'title' => $title,
            'student' => $student,
        ] );
    }

    public function create(){
        $title = "Sistem Sekolah - Tambah Siswa";
        return view('students.create', [
            'title' => $title
        ]);
    }

    public function edit(student $student){
        $title = "Sistem Sekolah - Edit Siswa";
        return view('students.edit', [
            'title' => $title,
            'student' => $student,
        ]);
    }

    public function store(Request $request)
    {
         $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BID'],
            'class' => ['required', 'string']

         ]);

         Student::create($validatedRequest);

         return redirect()->route('students.index');
    }

    public function update(student $student, Request $request){
        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis,' . $student->id],
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BID'],
            'class' => ['required', 'string']

         ]);
         $student->update($validatedRequest);
         return redirect()->route('students.index');
    }

    public function destroy(student $student){
        $student->delete();
         return redirect()->route('students.index');

        
    }
}
