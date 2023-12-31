@extends('frontend.master')

@section('content')
<div class="w3l-banner py-5">
    <div class="container py-lg-3 py-md-3">
        <div class="ban-content-inf row py-lg-3">
            <div class="maghny-gd-1 col-lg-8">
                <div class="maghny-grid">
                    <figure class="effect-lily border-radius">
                        <img class="img-fluid radius-image" src="{{ asset('/frontend/') }}/assets/images/1.jpg" alt="">
                        <figcaption class="w3set-hny">
                            <div class="info">
                                <a href="#reciepe" class="receipe">Reciepe</a>
                                <h4 class="top-text">Amazing Milk Chocolate Cupcakes with Buttercream</h4>
                                <p class="mt-2 d-sm-block d-none">Lorem ipsum dolor sit amet elit. Vitae nostrum ipsum vero
                                    tempore esse, eaque omnis culpa quo placeat?</p>
                                <div class="p-footer">
                                    <aside class="p-meta-info">
                                        <a href="#img" class="post-img-anchor">
                                            <img src="{{ asset('/frontend/') }}/assets/images/a1.jpg" alt="" class="post-img" />
                                        </a>
                                        <a href="#url">Elizabeth</a>
                                        <span class="meta-info-date">
                                            <span class="fa fa-clock-o"></span> Oct 3, 2020
                                        </span>
                                    </aside>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="maghny-gd-1 col-lg-4 mt-lg-0 mt-4 mobile-grid">
                <div class="maghny-gd-1">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid radius-image" src="{{ asset('/frontend/') }}/assets/images/2.jpg" alt="" />
                            <figcaption>
                                <div>
                                    <h4 class="top-text1">Amazing Milk Chocolate Cupcake with cream</h4>
                                    <aside class="p-meta-info">
                                        <span class="meta-info-el meta-info-custom">
                                            <span class="fa fa-clock-o mr-2"></span>10 Min Cook
                                        </span>
                                    </aside>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="maghny-gd-1 mt-lg-4">
                    <div class="maghny-grid">
                        <figure class="effect-lily border-radius">
                            <img class="img-fluid radius-image" src="{{ asset('/frontend/') }}/assets/images/3.jpg" alt="" />
                            <figcaption>
                                <div>
                                    <h4 class="top-text1">The Best Chewy Chocolate Chip Cookies Recipe</h4>
                                    <aside class="p-meta-info">
                                        <span class="meta-info-el meta-info-custom">
                                            <span class="fa fa-bell-o mr-2"></span>Sponsered by
                                            <strong>Johnson</strong>
                                        </span>
                                    </aside>
                                </div>

                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- adv -->
<div class="ad-image text-center pb-lg-5">
    <div class="container">
        <h6 class="advert-decs">- Advertisement -</h6>
        <a class="widget-ad-link" target="_blank" href="#url"><img
                src="{{ asset('/frontend/') }}/assets/images/ad.jpg" alt="- Advertisement -" class="radius-image img-fluid"></a>
    </div>
</div>
<!-- //adv -->
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="row">
            <div class="col-lg-8 most-recent pr-lg-4">
                <h3 class="title-left mb-3">Latest Recipes</h3>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-6 col-md-6 item">
                        <div class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="{{ url('/post/details/' .$post->id) }}">
                                    <img class="card-img-bottom d-block radius-image" src="{{ asset('/post/'.$post->image) }}"
                                        alt="Card image cap">
                                </a>
                                <div class="post-pos">
                                    <a href="#reciepe" class="receipe green">Reciepe</a>
                                    <span class="meta-info meta-info-custom">
                                        <span class="fa fa-clock-o mr-2"></span>10 Min Cook
                                    </span>
                                </div>
                            </div>
                            <div class="card-body p-0 blog-details">
                                <a href="{{ url('/post/details/' .$post->id) }}" class="blog-desc">{{ $post->title }}
                                </a>
                                <p>{{ Str::substr($post->short_description, 0, 50) }}</p>
                                <div class="p-footer mt-3">
                                    <div class="p-meta-info">
                                        <a href="#img" class="post-img-anchor">
                                            <img src="{{ asset('/frontend/') }}/assets/images/a1.jpg" alt=""
                                                class="post-img radius-img img-fluid" />
                                        </a>
                                        <a href="#url">Elizabeth</a>
                                    </div>
                                    <a href="#read" class="read">Read more <span class="fas fa-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="col-lg-4 trending mt-lg-0 mt-5 mb-lg-5 pl-lg-4">
                <div class="pos-sticky">
                    <div class="side-post-banner text-center">
                        <h3 class="title-left">Create a Stunning Website!</h3>
                        <p class="mt-3">Lorem, ipsum dolor sit amet elit. Libero, facere dolor sit, amet elit. ipsam
                            beatae eius.</p>
                        <a href="#read" class="btn-style btn btn-primary mt-4"> Get started </a>
                    </div>
                    <div class="tweets mt-5">
                        <h3 class="title-left mb-sm-3">Latest Tweets</h3>
                        <ul class="blog-cat twitter-feed">
                            <li>
                                <a href="#url"> @W3layouts help Developers, Designers, Website owners create
                                    Stunning Websites #design…
                                    <br><em class="twitter-date">Oct 4, 2020</em></a>
                            </li>
                            <li>
                                <a href="#url">@W3layouts Delog starter just evolved. has acquired the
                                    ability to generate sitemaps in production… @gatsbyjs @NetlifyCMS
                                    <br><em class="twitter-date">Oct 4, 2020</em></a>
                            </li>
                            <li>
                                <a href="#url"> @W3layouts help Developers, Designers, Website owners create
                                    Stunning Websites #design…
                                    <br><em class="twitter-date">Oct 4, 2020</em></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //block-->
    </div>
</div>
<!-- grids -->
<section class="grids-1 py-5" id="trip">
    <div class="grids py-lg-5 py-md-4">
        <div class="container">
            <div class="row grids-gap">
                <div class="col-lg-4 align-self">
                    <div class="text-left">
                        <h3 class="title-left mb-3">Categories</h3>
                        <p class="text-para">Curabitur id gravida risus. Fusce eget ex, nisi ac sed,
                            lacinia est. Quisque ut lectus, eros et, commodo risus.
                            Nullam sit amet laoreet elit. non magna a velit. </p>
                    </div>
                </div>
                <div class="col-lg-8 mt-lg-0 mt-md-5 mt-sm-4 mt-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                                <a href="#single"><img src="{{ asset('/frontend/') }}/assets/images/recipe.jpg" alt="" class="img-fluid" /></a>
                                <div class="info">
                                    <h4><a href="#single">Recipes</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-sm-0 mt-4">
                            <div class="column">
                                <a href="#single"><img src="{{ asset('/frontend/') }}/assets/images/drinks.jpg" alt="" class="img-fluid" /></a>
                                <div class="info">
                                    <h4><a href="#single">Cooldrinks</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 mt-md-0 mt-4">
                            <div class="column">
                                <a href="#single"><img src="{{ asset('/frontend/') }}/assets/images/video.jpg" alt="" class="img-fluid" /></a>
                                <div class="info">
                                    <h4><a href="#single">How to make</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //grids -->
<div class="w3l-searchblock w3l-homeblock1 py-5">
    <div class="container py-lg-4 py-md-3">
        <!-- block -->
        <div class="most-recent">
            <div class="title-align mb-4">
                <h3 class="title-left">20-Minutes Meals</h3>
                <a href="#blog" class="more-posts"> View more posts <span class="fas fa-arrow-right"></span></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/frontend/') }}/assets/images/meal1.jpg"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">How to</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">The only 12 curry recipes you’ll Ever Need
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> Oct 4, 2020</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item mt-md-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/frontend/') }}/assets/images/meal2.jpg"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe orange">Reciepe</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">How to cook French Fries like in a Restaurant
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> Oct 3, 2020</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/frontend/') }}/assets/images/meal3.jpg"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe blue">How to</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">Spicy noodles with north indian style
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> Oct 3, 2020</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item mt-lg-0 mt-5">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/frontend/') }}/assets/images/meal4.jpg"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe recipe">Reciepe</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">Eat Healthy, Delicious and Perfect Burgers
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> Oct 7, 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //block-->
    </div>
</div>
<!-- home page newsletter -->
<section class="w3l-bottom" id="newsletter">
    <div class="container">
        <div class="subscribe p-sm-5 p-4">
            <div class="row px-lg-0 py-lg-4 p-2">
                <div class="col-lg-5 header-section mx-auto">
                    <h3 class="title-left">Subscribe Newsletter </h3>
                    <p class=""> Get our latest news straight into your inbox</p>
                </div>
                <div class="col-lg-7 mt-lg-0 mt-4">
                    <form action="#" method="post" class="subscribe-wthree">
                        <div class="d-md-flex flex-wrap subscribe-wthree-field">
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email"
                                required="">
                            <button class="btn btn-style btn-primary" type="submit">
                                <span class="fa fa-paper-plane"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page newsletter -->
<!-- home page section -->
<section class="w3l-homeblock1">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="title-align mb-4">
                <h3 class="title-left">How to make dessert</h3>
                <a href="#blog" class="more-posts"> View more Videos <span class="fas fa-arrow-right"></span></a>
            </div>
            <div id="owl-demo1" class="owl-carousel owl-theme mt-4 py-2 mb-md-4 mb-5">
                @foreach ($posts as $post)
                <div class="item">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="{{ url('/post/details/' .$post->id) }}">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/frontend/') }}/assets/images/cake1.jpg"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe recipe">Reciepe</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="{{ url('/post/details/' .$post->id) }}" class="blog-desc">How to make Chocolate troffee crunch cake
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> Oct 4, 2020</span>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="#blog-single">
                                <img class="card-img-bottom d-block radius-image" src="{{ asset('/post/' .$post->image) }}"
                                    alt="Card image cap">
                            </a>
                            <div class="post-pos">
                                <a href="#reciepe" class="receipe orange">Reciepe</a>
                            </div>
                        </div>
                        <div class="card-body p-0 blog-details">
                            <a href="#blog-single" class="blog-desc">{{ $post->title }}
                            </a>
                            <span class="post-date"><span class="fa fa-clock-o"></span> {{ $post->created_at->format('M d,Y') }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
