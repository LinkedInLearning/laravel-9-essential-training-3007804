<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        // 1. Using raw SQL queries
        // $users = DB::select('select * from users');
        // dd($users);
        
        // 2. Query Builder
        // $users = DB::table('users')->select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);

        // 3. Eloquent ORM
        // $students = Student::select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($students);
        // foreach($students as $student) {
        //     echo $student->name. "<br>";
        // }
        $student = new Student();
        $student->name = "New";
        $student->email = "email@email.com";
        $student->save();

    }
}
