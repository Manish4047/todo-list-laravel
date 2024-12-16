@extends('layout.main')
@push('head')
<title>Todo list</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h1">All List</div>
        <a href="{{route("todo.create")}}" class="btn btn-primary">Add</a>
    </div>
    <table class="table table-border table-stropped table-dark">
        <thead>
            <tr>
                <th>Name</th>
                <th>Wrok</th>
                <th>Due Date</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($todos as $todo)
        <tr>
            <th>{{$todo->name}}</th>
            <th>{{$todo->work}}</th>
            <th>{{$todo->due_date}}</th>
            <th><a href="{{route('todo.edit',$todo->id)}}" class="btn btn-success btn-sm">Update</a>
            <a href="{{route('todo.delete',$todo->id)}}" class="btn btn-danger btn-sm">Delete</a></th>
        </tr>
        @endforeach
    </table>
</div>
@endsection
