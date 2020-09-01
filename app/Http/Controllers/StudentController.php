<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function index(){

    $students = Student::all();

    return view('students', [
      'teacher' => 'Alessandro Sainato',
      'students' => $students,
    ]);
  }

  public function handlebars(){
    return view('students_handlebars', []);
  }

}
