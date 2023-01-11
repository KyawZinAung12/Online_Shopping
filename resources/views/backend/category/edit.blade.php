@extends('backend.backend_template')
@section('content')

    <div class="container my-5">
        <form action="{{route('categories.update',$category->id)}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="">Name</label>
                <input type="text" class="form-control" name="category_name" value="{{$category->name}}">
            </div>

            <button type="submit" class="btn btn-success my-3">Update</button>
        </form>
    </div>

@endsection