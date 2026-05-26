<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $Students = [
            'Syah',
            'Fahmi',
            'Fadli',
            'Faisal'
        ];
        return view('students', [
            'students' => $Students
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
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|min:3',
            'umur' => 'required|numeric|min:18',
            'alamat' => 'required'
        ]);

        return "
        Nama: {$request->name} <br>
        Umur: {$request->umur} <br>
        Alamat: {$request->alamat}
    ";
        // $name = $request->input('name');
        // $umur = $request->input('umur');
        // $alamat = $request->input('alamat');
        // return "Hello " . $name . " umur " . $umur . " alamat " . $alamat;
    }
}
