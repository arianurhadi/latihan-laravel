<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        // $users = User::all();

        $users = User::isUser()->with('student')->paginate(5);

        //  return response()->json($users);

        return view('student.index', compact('users'));
    }

    public function detail($id){

        //get user by id
        $user = User::whereId($id)->with(['books'=> function ($query) {
            $query->with('category');
        }])->firstOrFail();

        // return view student-detail
        return view('student.detail', compact('user'));
    }
}
