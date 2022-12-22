<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Pagination\Paginator;

class TaskController extends Controller
{
    public function show(){

    

    // $inquiries=Task::paginate(10);
    $inquiries = Task::pluck('name')->all();

    

    // return view("welcome",compact("inquiries"));

    

    return json_encode($inquiries);

    
   
    }
}
