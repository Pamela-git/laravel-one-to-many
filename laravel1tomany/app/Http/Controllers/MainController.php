<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Typology;

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

  public function taskShow($id)
  {
    $task = Task::findOrFail($id);

    return view('pages.task-show', compact('task'));
  }

  public function taskCreate()
  {

    $emps = Employee::all();
    $typs = Typology::all();


    return view('pages.task-create', compact('emps', 'typs'));
  }

  public function taskStore(Request $request)
  {
    $data = $request -> all();

    // dd($data);
    $newTask = Task::make($request -> all());
    $emp = Employee::findOrFail($data['employee_id']);
    $newTask -> employee() -> associate($emp);
    $newTask -> save();

    $typs = Typology::findOrFail($data['typs']);

    $newTask -> typologies() -> attach($typs);

    return redirect() -> route('task-index');
  }

  public function taskEdit($id)
  {
    $emps = Employee::all();
    $task = Task::findOrFail($id);
    $typs = Typology::all();
    return view('pages.task-edit', compact('task', 'emps', 'typs'));
  }

  public function taskUpdate(Request $request, $id)
  {
    $data = $request -> all();
    $emp = Employee::findOrFail($data['employee_id']);
    $task = Task::findOrFail($id);
    $task -> update($data);
    $task -> employee() -> associate($emp);
    $task -> save();

    if (array_key_exists('typs', $data)) {
      $typs = Typology::findOrFail($data['typs']);
      $task -> typologies() -> sync($typs);
    }

    return redirect() -> route('task-index');
  }

  // Typologies

  public function typIndex()
  {
    $typs = Typology::all();
    return view('pages.typ-index', compact('typs'));
  }

  public function typShow($id)
  {
    $typ = Typology::findOrFail($id);

    return view('pages.typ-show', compact('typ'));
  }
}
