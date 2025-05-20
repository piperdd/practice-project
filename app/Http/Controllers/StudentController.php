<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index()
    {
        //TODO: insert query to DB here
        $student1 = (object)[
            "name"=> "Aminah",
            "grade"=> "47",
        ];
        $student2 = (object)[
            "name" => "Ali",
            "grade" => "99",
        ];
        $studentTypes = collect([$student1,$student2]);
        return view('student.index', compact(['studentTypes'])); //passes whole object to the view (student.index)
    
    }
}
