@extends('todos')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control"/>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection