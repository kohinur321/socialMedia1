@extends('backend.master')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <p>{{ session()->get('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            Edit Category
            </div>
            <div class="card-body">
             <form action="{{ url('/category/update/'.$category->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $category->name ?? old('name')}}" class="form-control" placeholder="Category name" />
                 </div>
                 <button type="submit" class="btn btn-sm btn-dark">Submit</button>
             </form>
        </div>
    </div>
</div>
@endsection
