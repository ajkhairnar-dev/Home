<!-- tour section start -->
    <!-- super_easy_booking start -->
    <section class="mix-2 offersection small-section super_easy_booking">
        <img src="{{asset('images/tour/background/15.jpg')}}" class="bg-img img-fluid blur-up lazyload" alt="">
        <div class="tourSection ratio3_2">

            <div class="title-1">
                <h2 class="pt-0">Super Easy Booking</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="center-slider-cab arrow-classic car-type-section">
                            @foreach($super as $s)
                            <div>
                                <div class="type-box">
                                    <div class="img-part">
                                        <img src="{{env('ADMIN_URL')}}{{$s->image}}" class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <div class="content">
                                        <h5>{{$s->title}}</h5>
                                        <h6>{{$s->short_title}}</h6>
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
    <!-- super_easy_booking end -->