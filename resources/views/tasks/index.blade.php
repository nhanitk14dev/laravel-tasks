@extends('layouts.master')

@section('title', 'Task Management')

@section('content')
    <div class="task-list">
        <h1>Task Management</h1>
        <div class="float-end my-2">
            <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>
        </div>
        <table class="table dataTable" id="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>Due Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($tasks)
                    @foreach ($tasks as $key => $task)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td class="text-capitalize">{{ $task->status }}</td>
                            <td>{{ $task->start_date->format('d-m-Y') }}</td>
                            <td>{{ $task->due_date->format('d-m-Y') }}</td>
                            <td>
                                <a href="{{ route('tasks.show', $task->id) }}"><i class="fa-regular fa-eye"></i></a>
                                <a href="{{ route('tasks.edit', $task->id) }}"><i class="fa-solid fa-pen"></i></a>
                                <a class="delete-task" data-url="{{ route('tasks.destroy', $task->id) }}" href="#">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>No data!</tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection
