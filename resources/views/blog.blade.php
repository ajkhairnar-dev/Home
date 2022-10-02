@php
$title = $data->title;
$metakey = $data->meta_keywords;
$metadesc = $data->meta_description;
@endphp

@section('title', $title)
@section('metakey', $metakey )
@section('metadesc', $metadesc)
@include('layouts.nav')
</header>



    <!-- blog section start -->
    <section class="section-b-space bg-white">
        <div class="container">
            <div class="row">

                <div class="col-lg-9">
                    <div class="blog-single-detail">
                        <!-- <div class="top-image">
                            <img src="./assets/images/blogs/13.jpg" alt="" class="img-fluid blur-up lazyloaded">
                        </div> -->


                        <h3>{{$data->title}}</h3>
                        <div class="detail-part">
                            <div class="top-image blog_img">
                                <img src="{{env('ADMIN_URL')}}{{$data->image}}" alt="Elephanta_caves" class="img-fluid blur-up lazyloaded">
                            </div>
                            <!--<h5 class="paragraph_heading">1. Elephanta Caves: : </h5>
                            <h6 class="go_cabish_blog_para">Enjoy the 14-kilometre ride from the city centre with <strong>gocabish</strong>.</h6>-->
                            <p>{!!$data->body!!}</p>
                        </div>

                        <!-- author details  -->
                        <div class="title-part">
                            <ul class="post-detail">
                                <li>{{date("F jS, Y", strtotime($data->created_at))}}</li>
                                <li>Posted By : Admin</li>
                                <li><i class="fa fa-heart"></i> 10 Hits</li>
                            </ul>

                        </div>

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
                                        <li>
                                            <div class="media">
                                                <img class=" popular_img blur-up lazyload" src="assets/images/blogs/Elephanta_caves.png" alt="Generic placeholder image">
                                                <div class="media-body align-self-center">
                                                    <div>
                                                        <h6>25 Dec 2018</h6>
                                                        <p>40 hits</p>
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
<script>
        var contentwidth = jQuery(window).width();
        if ((contentwidth) > '768') {
            $('footer').footerReveal();
        }
</script>