@extends('layout.main')
@push('head')
<title>Update Todo list</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h1">Update</div>
        <a href="" class="btn btn-primary">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route('todo.update')}}" method="post">
                @csrf
            <div class="form-group mt-4">
                <label for="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{$todo->name}}">
            </div>
            <div class="form-group mt-4">
                <label for="form-label">Work</label>
                <input type="text" name="work" class="form-control" value="{{$todo->work}}">
            </div>
            <div class="form-group mt-4">
                <label for="form-label">Due Date</label>
                <input type="date" name="date" class="form-control" value="{{$todo->due_date}}">
            </div>
            <input type="number" name="id" value="{{$todo->id}}" hidden>
            <button class="btn btn-primary mt-4">Update Todo</button>
            </form>
        </div>
    </div>
</div>
@endsection
