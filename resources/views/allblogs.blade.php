@section('title', 'Blogs')
@section('metakey', 'All Blogs' )
@section('metadesc', 'All Blogs')
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
                            <h2>Blog</h2>
                            <nav aria-label="breadcrumb" class="theme-breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">blogs</li>
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

                <div class="col-lg-9">
                    <div class="blog_section blog-inner ratio_landscape">
                        <div class="row blog-list">
                            
                            @foreach(Cache::get('posts') as $i => $c)
                            <div class="col-12">

                                <div class="blog-wrap blog_card wow fadeInUp">

                                    <div class="blog-image">
                                        <a href="{{route('single_blog',$c->slug)}}">
                                            <img src="{{env('ADMIN_ASSET_URL').$c->image}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-details">
                                        <div>
                                            <h6>
                                                <i class="fas fa-map-marker-alt"></i> Mumbai, india
                                                <i class="fas fa-clock ms-2"></i>{{date("F jS, Y", strtotime($c->created_at))}}
                                            </h6>
                                            <a href="{{route('single_blog',$c->slug)}}">
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
                        <nav aria-label="Page navigation example" class="pagination-section mt-0">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sticky-cls-top">
                        <div class="blog-sidebar">
                            <div class="blog-wrapper">
                                <div class="search-bar">
                                    <input type="text" placeholder="Search here..">
                                    <i class="fas fa-search"></i>
                                </div>
                            </div>

                            <div class="blog-wrapper">
                                <div class="sidebar-title">
                                    <h5>popular post</h5>
                                </div>
                                <div class="sidebar-content">
                                    <ul class="blog-post">
                                        <li>
                                            <a href="./singleBlog.php" class="media">
                                                <img class=" popular_img blur-up lazyload" src="./assets/images/blogs/Juhu_beach.jpg" alt=" Generic placeholder image">
                                                <div class="media-body align-self-center">
                                                    <div>
                                                        <h6>25 Dec 2018</h6>
                                                        <p>100 hits</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class=" popular_img blur-up lazyload" src="./assets/images/blogs/Juhu_beach.jpg" alt=" Generic placeholder image">
                                                <div class="media-body align-self-center">
                                                    <div>
                                                        <h6>25 Dec 2018</h6>
                                                        <p>100 hits</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->

@include('layouts.footerwidgets')
@include('layouts.footer')
