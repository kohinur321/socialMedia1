@extends('backend.master')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <p>{{ session()->get('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            Add Post
            </div>
            <div class="card-body">
             <form action="{{ url('/post/update/'.$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Select A Category</label>
                    <select name="cat_id" class="form-control">
                       <option selected disabled>Select A Category</option>
                       @foreach ($categories as $category )
                        <option value="{{ $category->id}}" {{ $post->cat_id == $category->id ? 'selected' : ''}}>{{ $category->name}}</option>
                       @endforeach

                    </select>
                 </div>
                 <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Post title" />
                 </div>

                 <div class="form-group">
                    <label>Short description</label>
                    <textarea class="form-control" name="short_description" rows="5" placeholder="Enter short description">{{ $post->short_description }}</textarea>
                 </div>

                 <div class="form-group">
                    <label>Long description</label>
                    <textarea class="form-control" id="summernote" name="long_description" rows="5" placeholder="Enter long description">{{ $post->short_description }}</textarea>
                 </div>

                 <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control" />
                    <img src="{{ asset('/post/'.$post->image) }}" height="50" width="50" />
                 </div>

                 <button type="submit" class="btn btn-sm btn-dark">Submit</button>
             </form>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 400,
            placeholder: 'Post long description',
        });
    });
</script>
@endpush
