@extends('layout.main')
@push('head')
<title> Add Todo</title>
@endpush

@section('main-section')
<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h1">Create</div>
        <a href="{{route('todo.home')}}" class="btn btn-primary">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{route('todo.store')}}" method="post">
            @csrf
                <div class="form-group mt-4">
                <label for="form-label">Name</label>
                <input type="text" name="name" class="form-control">
                <div class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="form-label">Work</label>
                <input type="text" name="work" class="form-control">
                <div class="text-danger">
                    @error('work')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="form-label">Due Date</label>
                <input type="date" name="date" class="form-control">
                <div class="text-danger">
                    @error('date')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary mt-4">Add list</button>
        </form>
        </div>
    </div>
</div>
@endsection
