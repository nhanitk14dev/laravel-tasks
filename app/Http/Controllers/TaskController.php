<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskFormRequest;
use App\Repositories\TaskRepositoryInterface;

class TaskController extends Controller
{
    protected $task;

    public function __construct(TaskRepositoryInterface $task)
    {
        $this->task = $task;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = $this->task->getAll();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function show(string $id)
    {
        $task = $this->task->find($id);
        if ($task) {
            return view('tasks.show', compact('task'));
        }
        return redirect('/404');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskFormRequest $request)
    {
        $validatedData = $request->validated();
        $this->task->store($validatedData);
        return redirect('/tasks')->with('success', 'Task created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = $this->task->find($id);
        if ($task) {
            return view('tasks.edit', compact('task'));
        }
        return redirect('/404');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskFormRequest $request, string $id)
    {
        $validatedData = $request->validated();
        $this->task->update($validatedData, $id);
        return redirect()->back()->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = $this->task->find($id);
        if (!$task) {
            return response()->json([
                'success' => false,
                'msg' => 'Task is not found!',
            ]);
        }

        $this->task->destroy($id);
        return response()->json([
            'success' => true,
            'msg' => 'Task deleted successfully',
        ]);
    }
}
