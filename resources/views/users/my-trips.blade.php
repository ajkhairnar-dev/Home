@section('title', 'My Profile')
@section('metakey', 'My Profile Page' )
@section('metadesc', 'My Profile Page')
@include('layouts.nav')



    <!-- section start-->
    <section class="small-section dashboard-section bg-inner" data-sticky_parent>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="pro_sticky_info" data-sticky_column>
                        <div class="dashboard-sidebar">
                            <div class="profile-top">
                                <div class="profile-image">
                                    <img src="assets/images/avtar/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                    <a class="profile-edit" href="javascript:void(0)">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                            <path d="M20 14.66V20a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h5.34">
                                            </path>
                                            <polygon points="18 2 22 6 12 16 8 16 8 12 18 2"></polygon>
                                        </svg>
                                    </a>
                                </div>
                                <div class="profile-detail">
                                    <h5>Ravishankar Pal</h5>
                                    <h6>+917447344789</h6>
                                    <h6>domainsdefault@gmail.com</h6>
                                </div>
                            </div>
                            <div class="faq-tab">
                                <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                    <!-- <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                            href="#dashboard">dashboard</a></li> -->
                                    <li class="nav-item"><a  class="nav-link active" href="{{route('account')}}">profile</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="{{route('earnings')}}">cabish points</a></li>
                                    <li class="nav-item"><a  class="nav-link" href="">bookings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product_img_scroll" data-sticky_column>
                        <div class="faq-content tab-content" id="top-tabContent">


                            <div class="tab-pane fade show active" id="bookings">
                                <div class="dashboard-box">

                                    <div class="dashboard-title">
                                        <h4>upcoming booking</h4>
                                    </div>

                                    <div class="dashboard-detail ">
                                        <div class="booking-box bg-white border p-3  rounded shadow-sm">
                                            <div class="date-box">
                                                <span class="date">25</span>
                                                <span class="month">aug</span>
                                            </div>
                                            <div class="detail-middle">
                                                <div class="media">
                                                    <div class="icon">
                                                        <i class="fas fa-car"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Nashik to Mumbai</h6>
                                                        <p>amount paid: <span>INR 2500.00</span></p>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Payment ID: aSdsadf5s1f5</h6>
                                                        <p>Booking Date: <span>11 August 2022</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detail-last">
                                                <a href="#"><i class="fas fa-window-close" data-bs-toggle="tooltip" data-placement="top" title="cancle booking"></i></a>
                                                <span class="badge bg-info">upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dashboard-detail ">
                                        <div class="booking-box bg-white border p-3  rounded shadow-sm">
                                            <div class="date-box">
                                                <span class="date">15</span>
                                                <span class="month">jun</span>
                                            </div>
                                            <div class="detail-middle">
                                                <div class="media">
                                                    <div class="icon">
                                                        <i class="fas fa-car"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Nashik to Mumbai</h6>
                                                        <p>amount paid: <span>INR 2500.00</span></p>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="media-heading">Payment ID: aSdsadf5s1f5</h6>
                                                        <p>Booking Date: <span>11 August 2022</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="detail-last">
                                                <a href="#"><i class="fas fa-window-close" data-bs-toggle="tooltip" data-placement="top" title="cancle booking"></i></a>
                                                <span class="badge bg-danger">cancelled</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end-->


    <!-- footer start -->
    @include('layouts.footerwidgets')
    <!-- footer end -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fas fa-angle-up"></i>
        </div>
    </div>
    <!-- tap to top end -->
    
    @include('layouts.footer')

