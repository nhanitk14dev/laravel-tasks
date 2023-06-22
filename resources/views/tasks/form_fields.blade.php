@php
    $statusLabels = \App\Models\Task::getStatusLabels();
    $isDisabled = isset($disabledAllFields) ? $disabledAllFields : '';
@endphp

<form class="row form g-3 needs-validation" novalidate method="{{ $method ?? '' }}" action="{{ $action ?? '' }}"
    id="tasks-form">
    @csrf

    @isset($isPutMethod)
        @method('PUT')
    @endisset

    <div class="col-12 col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $task->title ?? '' }}"
            placeholder="Please input title" required {{ $isDisabled }}>
        <div class="invalid-feedback">
            Title is required.
        </div>
    </div>
    <div class="col-12 col-md-6">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required {{ $isDisabled }}>
            <option selected value="">Choose...</option>
            @foreach ($statusLabels as $key => $st)
                <option value="{{ $key }}" {{ !empty($task) && $task->status === $key ? 'selected' : '' }}>
                    {{ $st }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            Status is required.
        </div>
    </div>
    <div class="col-12 col-md-6">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" required {{ $isDisabled }}>{{ $task->description ?? '' }}</textarea>
        <div class="invalid-feedback">
            Description is required.
        </div>
    </div>

    <div class="col-12 col-md-6">
        <label for="start-date" class="form-label">Start Date</label>
        <input type="text" class="form-control date-flatpickr" id="start-date" name="start_date"
            value="{{ $task->start_date ?? '' }}" {{ $isDisabled }}>
        <div class="invalid-feedback">
            Start Date is required.
        </div>
    </div>

    <div class="col-6">
        <label for="due-date" class="form-label">Due Date</label>
        <input type="text" class="form-control date-flatpickr" id="due-date" name="due_date"
            value="{{ $task->due_date ?? '' }}" {{ $isDisabled }}>
        <div class="invalid-feedback">
            Due Date is required.
        </div>
    </div>

    @if (!$isDisabled)
        <div class="col-12 mt-5">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    @endif

</form>
