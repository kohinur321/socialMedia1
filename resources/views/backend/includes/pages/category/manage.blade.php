@extends('backend.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Manage All Category
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                 @foreach ($categories as $category)
                 <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ url('/category/edit/'.$category->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('/category/delete/'.$category->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                 </tr>
                 @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
