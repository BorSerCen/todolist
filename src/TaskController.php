<?php

namespace Borsercen\Todolist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller {
	public function index() {
		return redirect()->route('task.create');
	}

	public function create() {
		$tasks = Task::all();
		$submit = 'Add';
		return view('borsercen.todolist.list', compact('tasks', 'submit'));
	}

	public function store(Request $request) {
		$input = $request->all();
		Task::create($input);
		return redirect()->route('task.create');
	}

	public function edit($id) {
		$task = Task::find($id);
		$tasks = Task::all();
		$submit = 'Update';
		return view('borsercen.todolist.list', compact('tasks', 'task', 'submit'));
	}

	public function update($id, Request $request) {
		$input = $request->all();
		$task = Task::findOrFail($id);
		$task->update($input);
		return redirect()->route('task.create');
	}

	public function destroy($id) {
		$task = Task::findOrFail($id);
		$task->delete();
		return redirect()->route('task.create');
	}
}
