@extends('frontend.master')

@section('content')
<div class="w3l-about-breadcrumb w3l-search-results py-5 text-center">
    <div class="container py-lg-4 py-md-3">
        <ul class="breadcrumbs-custom-path mb-sm-3 mb-2 text-center">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Post Details </li>
        </ul>
        <h3 class="title-big">{{ $postDetail->title }}</h3>
    </div>
</div>
<!-- about breadcrumb -->
<section class="w3l-blog-single1 py-5">
    <div class="container py-lg-3">

        <div class="text2">
            <p class="text2-text mb-4">
                {{ $postDetail->short_description }}
            </p>
        </div>
        <div class="text-bg-image">
            <img src="{{ asset('/post/' .$postDetail->image) }}" alt="" class="img-fluid radius-image">
        </div>
        <div class="text-content-text">
            <div class="d-grid-2">
                <div class="text2 mt-4">
                    <h3 class="title-left">Who We Are and What We Stand for</h3>
                    <p class="mt-3">
                        {!! $postDetail->long_description !!}
                    </p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p>Name</p>
                    <p>Message</p>
                </div>
            </div>
        </div>

        <form action="{{ url('/post/comment/'.$postDetail->id) }}" method="post">
            @csrf
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter commenter name" />
            <label>Message</label>
            <textarea class="form-control" name="message" rows="5" placeholder="Enter your message"></textarea>
            <button type="submit" name="btn btn-sm btn-dark">Send</button>
        </form>
    </div>
</section>
@endsection
