<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{

  // emps
  public function employeeIndex()
  {

    $emps = Employee::all();
    return view('pages.emp-index', compact('emps'));
  }

  public function employeeShow($id)
  {
    $emp = Employee::findOrFail($id);

    return view('pages.emp-show', compact('emp'));
  }

  // tasks

  public function taskIndex()
  {
    $tasks = Task::all();
    return view('pages.task-index', compact('tasks'));
  }

  public function taskCreate()
  {

    $emps = Employee::all();

    return view('pages.task-create', compact('emps'));
  }

  public function taskStore(Request $request)
  {
    $newTask = Task::make($request -> all());
    $emp = Employee::findOrFail($request -> get('employee_id'));
    $newTask -> employee() -> associate($emp);
    $newTask -> save();

    return redirect() -> route('task-index');
  }

  public function taskEdit($id)
  {
    $emps = Employee::all();
    $task = Task::findOrFail($id);
    return view('pages.task-edit', compact('task', 'emps'));
  }
}
