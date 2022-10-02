@php
$title = $meta->title;
$metakey = $meta->meta_keywords;
$metadesc = $meta->meta_description;
@endphp

@section('title', $title)
@section('metakey', $metakey )
@section('metadesc', $metadesc)
@include('layouts.nav')
</header>


    <!-- blogs slider start -->
    <div>
        <div class="container-fluid ratio_square blogSection">

            <div class="row">
                <div class="col p-0">
                        <div class="blogSlider no-arrow ">
                        <div class="blogimg">

                            <div>
                                <img src="{{asset('images/blogs/blogs-banner.jpg')}}" alt="" class="img-fluid  blur-up lazyload bg-img">

                            </div>

                        </div>
                        <div class="blogimg">

                            <div>
                                <img src="{{asset('images/blogs/blogs-banner.jpg')}}" alt="" class="img-fluid  blur-up lazyload bg-img">

                            </div>

                        </div>
                        <div class="blogimg">

                            <div>
                                <img src="{{asset('images/blogs/blogs-banner.jpg')}}" alt="" class="img-fluid  blur-up lazyload bg-img">

                            </div>

                        </div>

                    </div>
                    <div class="breadcrumb-content pt-0">
                        <div>
                            <h2>All Offers</h2>
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Offers</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blogs slider end -->


    <!-- blog section start -->
    <section class="section-b-space bg-white">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="blog_section blog-inner ratio_landscape">
                        <div class="row blog-list">
                            
                            @foreach($offers as $c)
                            <div class="col-lg-4 col-md-4 col-sm-12">

                                <div class="blog-wrap blog_card wow fadeInUp">

                                    <div class="blog-image">
                                        <a href="{{route('single_offer',$c->slug)}}">
                                            <img src="{{env('ADMIN_ASSET_URL').$c->thumbnail}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-details">
                                        <div>
                                            <h6>
                                                <i class="fas fa-clock ms-2"></i>{{date("F jS, Y", strtotime($c->created_at))}}
                                            </h6>
                                            <a href="{{route('single_offer',$c->slug)}}">
                                                <h5>{{$c->title}}</h5>

                                            </a>
                                            <p>An ancient location known as Elephanta Caves has been listed as a UNESCO World Historical Landmark. It is a superb illustration of mediaeval Indian rock-cut art and construction. On an island called Elephanta or Gharapuri, about 11 kilometres from Mumbai, are the Elephanta Caves. These caves previously included elaborate murals, but they are now in ruins. However, the Elephanta Caves provide a breathtaking view of Mumbai's cityscape. The Elephanta Caves are accessible via ferry from the Gateway of India.</p>
                                            <h6 class="link"><a href="{{route('single_blog',$c->slug)}}">read more</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

@include('layouts.footerwidgets')
@include('layouts.footer')
