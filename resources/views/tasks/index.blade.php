@extends('layouts.master')

@section('title', 'Task Management')

@section('content')
    <h1>Task Management</h1>
    <div class="container">
        <table class="table dataTable" id="myTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Status</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Due Date</th>
                </tr>
            </thead>
            <tbody>
                @if ($tasks)
                    @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">{{ $task->id }}</th>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td class="text-capitalize">{{ $task->status }}</td>
                            <td>{{ $task->start_date->format('d-m-Y') }}</td>
                            <td>{{ $task->due_date->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>No data!</tr>
                @endif

            </tbody>
        </table>
    </div>
@endsection
