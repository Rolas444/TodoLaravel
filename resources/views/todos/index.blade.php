@extends('todos')

@section('content')
@if(session('success'))
<h6 class="alert alert-success">{{session('success')}}</h6>
@endif

@error('title')
<h6 class="alert alert-danger">{{$message}}</h6>
@enderror
@error('desc')
<h6 class="alert alert-danger">{{$message}}</h6>
@enderror
    <div class="container w-25 border p-4 mt-4">

        <form action='{{ route('todos')}}' method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="desc" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <hr>
        <div>
            <h3>Tasks</h3>
            <div>
                @foreach ($todos as $todo)
                    <div class="row py-1">
                        <div class="col-md-9 d-flex align-items-center">
                            <a href="{{route('todos-edit',['id'=>$todo->id])}}">{{$todo->title}}</a>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end">
                            <form action="{{route('todo-destroy',[$todo->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection