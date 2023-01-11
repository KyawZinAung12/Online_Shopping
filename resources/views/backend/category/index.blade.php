@extends('backend.backend_template')
@section('content')
<div class="container my-5">
    <a href="{{route('categories.create')}}" class="btn btn-success float-end">+ Add</a>

</div>

<div class="container-fluid px-4 py-5">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>                       
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>                       
                        <th>Name</th>                       
                        <th>Action</th>                       
                    </tr>
                </tfoot>
                <tbody> 
                    @php
                        $j=1;
                    @endphp
                    
                    @foreach ($categories as $category)
                    
                        <tr>
                            <td>{{$j++}}</td>
                            <td>{{$category->name}}</td>
                            <td>
                                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>

                                <form action="{{route('categories.destroy',$category->id)}}" method="post" class="d-inline-block" onclick="return confirm('Are You Sure Delete')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    


                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection