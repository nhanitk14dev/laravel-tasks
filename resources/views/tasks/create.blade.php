@extends('layouts.master')

@section('title', 'Add New Task')

@section('content')
    <div class="card p-5">
        <div class="card-title">
            <h1>Add New Task</h1>
            <div class="my-2">
                <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back to list</a>
            </div>
        </div>
        <div class="card-body">
            @include('tasks.form_fields', ['action' => route('tasks.store'), 'method' => 'POST'])
        </div>
    </div>
@endsection
