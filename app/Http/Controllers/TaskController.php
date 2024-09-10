<?php

namespace App\Http\Controllers;

use App\Contracts\Interfaces\TaskInterface;
use App\Http\Requests\TaskRequest;
use App\Models\task;
use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    private TaskInterface $task;
    private TaskService $service;

    public function __construct(TaskInterface $task, TaskService $service)
    {
        $this->task = $task;
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        $this->task->store($request->validate());
        return redirect()->back()->with('success', 'Berhasil Menambah Tugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        //
    }
}
