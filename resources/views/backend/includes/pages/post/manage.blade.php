@extends('backend.master')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Manage All Post
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Short Description</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                 @foreach ($posts as $post)
                 <tr>
                    <td>{{ $loop->index+1 }}</td>
                    <td>{{ Str::substr($post->title, 0, 50) }}</td>
                    <td>{{ Str::substr($post->short_description, 0, 50) }}</td>
                    <td>
                        <img src="{{ asset('/post/'.$post->image) }}" height="40" width="40" />
                    </td>
                    <td>
                        <a href="{{ url('/post/edit/'.$post->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <a href="{{ url('/post/delete/'.$post->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                 </tr>
                 @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
