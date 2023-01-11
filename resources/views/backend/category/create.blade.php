@extends('backend.backend_template')
@section('content')

    <div class="container my-5">
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div>
                <label for="">Name</label>
                <input type="text" class="form-control" name="category_name">
            </div>

            <button type="submit" class="btn btn-success my-3">Save</button>
        </form>
    </div>

@endsection