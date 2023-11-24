@extends('backend.master')

@section('content')
<div class="container">
    @if (session()->has('success'))
    <p>{{ session()->get('success') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            Add Category
            </div>
            <div class="card-body">
             <form action="{{ url('/post/store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Category title" />
                </div>
                 <button type="submit" class="btn btn-sm btn-dark">Submit</button>
             </form>
        </div>
    </div>
</div>
@endsection


