<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        // $users = User::all();

        $users = User::isUser()->paginate(5);

        //  return response()->json($users);

        return view('student.index', compact('users'));
    }
}
