<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        // $Students = [
        //     'Syah',
        //     'Fahmi',
        //     'Fadli',
        //     'Faisal'
        // ];
        // return view('students', [
        //     'students' => $Students
        // ]);
        $students = Student::all();
        return view('students.index', [
            'students' => $students
        ]);
    }
    public function show($name)
    {
        return 'Hello nama student ' . $name;
    }
    public function search(Request $request)
    {
        $search = $request->query('name');
        // $search = $request->input('name'); untuk form input 
        return "Hasil Pencarian : " . $search;
    }

    public function createForm()
    {
        return view('students.tambah');
    }
    public function storeForm(Request $request)
    {
        // Student::create([
        //     'name' => $request->name,
        //     'umur' => $request->umur,
        //     'alamat' => $request->alamat
        // ]);
        $validated = $request->validate([
            'name' => 'required|min:3',
            'umur' => 'required|numeric|min:18',
            'alamat' => 'required'
        ]);
        Student::create($validated);
        return redirect()->route('students.create')->with("success", "student berhasil ditambahkan");
    }
    public function store(Request $request)
    {


        //     $request->validate([
        //         'name' => 'required|min:3',
        //         'umur' => 'required|numeric|min:18',
        //         'alamat' => 'required'
        //     ]);

        //     return "
        //     Nama: {$request->name} <br>
        //     Umur: {$request->umur} <br>
        //     Alamat: {$request->alamat}
        // ";
        // $name = $request->input('name');
        // $umur = $request->input('umur');
        // $alamat = $request->input('alamat');
        // return "Hello " . $name . " umur " . $umur . " alamat " . $alamat;
        Student::create([
            'name' => 'Andi',
            'umur' => 12,
            'alamat' => 'Serang'
        ]);
        return "student berhasil ditambahkan";
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', [
            'student' => $student
        ]);
    }
    public function update(Request $request, $id)
    {
        // $student = Student::find($id);
        // $student = Student::findOrFail($id);
        $student = Student::where('id', $id)->firstOrFail();

        $student->update([
            'name' => $request->name,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect()->route('students.edit', $student->id)->with("success", "student berhasil diupdate");
    }
    public function destroy($id)
    {
        $student = Student::findorFail($id);
        $student->delete();
        return redirect()->route('students.index')->with("success", "student berhasil dihapus");
    }
}
