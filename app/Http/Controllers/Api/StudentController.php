<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
  public function view() {
    $students = Student::all();
    return response()->json(compact('students'));
  }
}
