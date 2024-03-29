<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class TasksController extends Controller
{
    public function index() {
      $tasks = App\task::all();
      return view('tasks.index',compact('tasks'));

    }
    public function show($id) {
      $task = App\task::find($id);
      return view('tasks.show',compact('task'));

    }
}
