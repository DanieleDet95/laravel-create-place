<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index(){
    // $students = [
    //   [
    //     'nome' => 'Daniele',
    //     'cognome' => 'Detommaso',
    //     'voto' => 10,
    //   ],
    //   [
    //     'nome' => 'Miriam',
    //     'cognome' => 'Agatiello',
    //     'voto' => 9,
    //   ],
    //   [
    //     'nome' => 'Gigi',
    //     'cognome' => 'Vitucci',
    //     'voto' => 3,
    //   ]
    // ];

    $students = Student::all();

    return view('students', [
      'teacher' => 'Alessandro Sainato',
      'students' => $students,
    ]);
  }
}
