@include('layouts.nav')
    </header>
    <!--  header end -->

@include('layouts.cabfiltertop')


    <!-- section start -->
    <section class="pt-0 bg-inner small-section">
        <div class="container cabcontainer">
            <div class="row">
                
    @include('layouts.cabfilter')



                <div class="col-lg-9">
                    <section class="category-wrapper rounded-1 pt-0 ">
                        <!-- cab  variation 1 card ================================ -->
                        <div class="row">

                        @foreach ($data as $c)
                        
                        @php
                        $kms = $c->pack_type*10;
                        $hours = $c->pack_type;
                        @endphp
                        
                            <div class="col-md-12 carType petrol {{$c->vehicletype}}">
                                <div class="content grid">
                                    <div>
                                        <div class="category-wrap car__card_wrap wow fadeInUp grid-item" data-class="popular">
                                            <div class="category-img car__card_img">
                                                <div class="label-offer">Certified</div>
                                                <a href="#"><img src="{{env('ADMIN_ASSET_URL').$c->vehicleimg}}" alt="" class="img-fluid blur-up lazyload"></a>

                                            </div>
                                            <div class="category-content">
                                                <div class="detail-wrap ">

                                                    <!-- card_header_desktop====== -->
                                                    <div class="card-details_header-desktop card-details_header border px-3 py-3">
                                                        <div class="card_details_header-box">
                                                            <div class="car_left_info">
                                                                <div class="matchbox_new px-2 text-uppercase">
                                                                    {{$c->vehicletype}}
                                                                </div>
                                                                <h3 class="fw-bolder "> {{$c->vehicletitle}}</h3>
                                                                <span class="p-1 fw-lighter similiar-badge ">Or Similiar</span>
                                                            </div>
                                                            <div class="car_center_info flex">
                                                                <div class="car_center_info_upper_row flex">
                                                                    <div class="ac-box">
                                                                        <span class="ti-shine"></span>AC
                                                                    </div>
                                                                    <div>
                                                                        <span class="ti-wheelchair"></span>
                                                                        <span>{{$c->seat}}</span> passenger
                                                                        allowed
                                                                    </div>
                                                                </div>
                                                                <div class="car_center_info_botto_row">
                                                                    <div class="">
                                                                        <img style="width:15px; height:15px" alt="" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png">
                                                                        <p class="d-inline">Petrol+CNG/Diesel</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="car_right_info flex">
                                                                <div class="car_rating">
                                                                    <span class="block px-2 mx-1">{{$c->ratings}}
                                                                        ratings</span>
                                                                    <span class="badge bg-success p-1">{{$c->stars}}/5</span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./ card_header_desktop====== -->
                                                    <!-- card_header_mobile====== -->
                                                    <div class="card-details_header-mobile card-details_header border px-3 py-3">
                                                        <div class="card_details_header-box">
                                                            <div class="car_left_info">
                                                                <h3 class="fw-bolder "> {{$c->vehicletitle}}</h3>
                                                                <div class="flex car_smiliar_mobile_flex">
                                                                    <span class="p-1 fw-lighter similiar-badge ">Or Similiar</span>
                                                                    <div class="matchbox_new px-2 text-uppercase">
                                                                         {{$c->vehicletype}}
                                                                    </div>
                                                                </div>
                                                                <div class="flex car_type_mobile">
                                                                    <div class="ac-box"> <span class="ti-shine"></span>AC
                                                                    </div>
                                                                    <div class="car_type_box">
                                                                        <img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png">Petrol+CNG/Diesel
                                                                    </div>
                                                                    <div class="passeng">
                                                                        <span class="ti-wheelchair"></span>

                                                                        <span>{{$c->seat}}</span> passenger
                                                                        allowed
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="car_rating">
                                                                <span class="block px-2 mx-1">{{$c->ratings}}
                                                                    ratings</span>
                                                                <span class="badge bg-success p-1">{{$c->stars}}/5</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ./ card_header_mobile====== -->
                                                    <div class="row mt-3 col_margin">
                                                        <div class="col">
                                                            <div class="card_basic_info">
                                                                <div class="left-content carlist">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <p class="d-flex align-items-center fw-bolder">
                                                                            <span class="heading_line"></span>
                                                                            Ecomomical
                                                                            car with goSafe promise
                                                                        </p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p>
                                                                            <img src="{{asset('images/icon/includekms.png')}}"/> {{$kms}} kms
                                                                            included. After that ₹{{$c->after_rates}}/km
                                                                        </p>
                                                                        <p>
                                                                            <span class="ti-map-alt"></span>{{$hours}} hours
                                                                            included. After that ₹{{$c->after_hours}}/hr
                                                                        </p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><img src="{{asset('images/icon/freecancellation.png')}}"> Free cancellation until 6 hours before pickup</p>
                                                                    </div>
                                                                    <div class="row">
                                                                        <p><img src="{{asset('images/icon/reserve.png')}}"> Reserve this cab at ₹499 only</p>
                                                                    </div>
                                                                    <!-- <div class="row">
                                                                        <p>
                                                                        <span 
                                                                         class="CabInfoListstyles__IconWrap-sc-1d6s2h6-1 cvcwsB"><img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png"></span>
                                                                        Gas
                                                                        </p>
                                                                    </div> -->
                                                                </div>


                                                                <div class="price_box col-md-3 md_left  d-flex justify-content-between align-items-center flex-column">
                                                                    @php
                                                                    $dd = ($c->discount)/100;
                                                                    $price = round($c->rates+($c->rates*0.05));
                                                                    $discount = round($price + ($price*$dd));
                                                                    $points = $discount*0.05;
                                                                    if($points>150){$points = 150;}
                                                                    @endphp
                                                                    
                                                                    <div class="discount_offer-badge">
                                                                       {{$c->discount}}%
                                                                    </div>

                                                                    <h6 class="fw-bolder">
                                                                        <span class="cross-price">₹{{$discount}}</span> ₹{{$price}}
                                                                    </h6>

                                                                    <form action="/booking" method="post">
                                                                         @csrf
                                                                        <input type="hidden" value="{{$c->vehicletype}}" name="vehicletype">
                                                                        <input type="hidden" value="{{$c->pickup}}" name="pickup">
                                                                        <input type="hidden" value="{{$c->pickup}}" name="drop">
                                                                        <input type="hidden" value="{{$c->id}}" name="packcode">
                                                                        <input type="hidden" value="{{$tripmeta['triptype']}}" name="triptype">
                                                                        <input type="hidden" value="{{$price}}" name="price">
                                                                        <input type="hidden" value="{{$tripmeta['ddate']}}" name="ddate">
                                                                        <input type="hidden" value="{{$tripmeta['dtime']}}" name="dtime">
                                                                        <button class="select-btn btn btn-solid color1 rounded-3" type="submit">select</button>
                                                                    </form>
                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="d-flex gap-2 py-1 flex-wrap">
                                                            <div class="safety"><span><img src="https://hotel.easemytrip.com/img/shieldro.svg" alt=""></span> Safety Standards &
                                                                Restriction
                                                            </div>
                                                            <div class="partialpay">
                                                                <span><img src="https://transfer.easemytrip.com/assets/img/par_pym.svg" alt=""></span>Partial
                                                                Payment
                                                            </div>
                                                            <div class="car-gocabishbadge">
                                                                <span class="fw-bolder"> {{round($points)}} </span>Gocabish Points
                                                            </div>
                                                        </div>




                                                        <div class="car_more-info collection-collapse-block">
                                                            <a href="javascript:void(0)" class="car_more-info-btn collapse-block-title border-top">
                                                                View more information <span class="ti-receipt"></span>
                                                            </a>


                                                            <div class="collection-collapse-block-content border-top" style="display:none">
                                                                <div class="car_more-info ">
                                                                    <div class="collection-collapse-block">
                                                                        <div class="collection-collapse-block-content">
                                                                            <div class="car_additonal-info py-3">

                                                                                <div class="row">
                                                                                    <div class="col-md-6">

                                                                                        <h3 class="card__additonal-info-heading">

                                                                                            includings
                                                                                        </h3>
                                                                                        <ul class="includings-ul">
                                                                                            <li>
                                                                                                <p> Includes GST (5%) in
                                                                                                    the
                                                                                                    costing.</p>

                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Includes Driver Day
                                                                                                    allowance.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Your Trip has a KM
                                                                                                    limit
                                                                                                    and
                                                                                                    in case of certain
                                                                                                    special
                                                                                                    packages may even
                                                                                                    contain
                                                                                                    Hours limit. If your
                                                                                                    usage
                                                                                                    exceeds these
                                                                                                    limits,
                                                                                                    you
                                                                                                    will be charged for
                                                                                                    the
                                                                                                    excess KM used
                                                                                                    (and/or
                                                                                                    hour
                                                                                                    if applicable).
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>All road toll fees,
                                                                                                    parking
                                                                                                    charges, state taxes
                                                                                                    etc.
                                                                                                    are charged extra
                                                                                                    and
                                                                                                    need
                                                                                                    to be paid to the
                                                                                                    concerned
                                                                                                    authorities as per
                                                                                                    actuals.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>For driving between
                                                                                                    10:00
                                                                                                    pm
                                                                                                    to 6:00 am on any of
                                                                                                    the
                                                                                                    nights, an
                                                                                                    additional
                                                                                                    allowance will be
                                                                                                    applicable
                                                                                                    and is to be paid to
                                                                                                    the
                                                                                                    driver.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Please ensure you
                                                                                                    have
                                                                                                    covered all cities
                                                                                                    you
                                                                                                    plan
                                                                                                    to visit in your
                                                                                                    itinerary.
                                                                                                    This will help our
                                                                                                    driver
                                                                                                    prepare accordingly.
                                                                                                    Adding
                                                                                                    city to the
                                                                                                    itinerary
                                                                                                    during
                                                                                                    trip may not be
                                                                                                    possible.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>If your Trip has Hill
                                                                                                    climbs,
                                                                                                    cab AC may be
                                                                                                    switched
                                                                                                    off
                                                                                                    during such climbs.
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                    <div class="col-md-6">
                                                                                        <h3 class="card__additonal-info-heading">

                                                                                            additional information
                                                                                        </h3>
                                                                                        <ul class="additional__information-ul">
                                                                                            <li>
                                                                                                <p>Includes GST (5%) in
                                                                                                    the
                                                                                                    costing.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Includes Driver Day
                                                                                                    allowance.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Your Trip has a KM
                                                                                                    limit
                                                                                                    and
                                                                                                    in case of certain
                                                                                                    special
                                                                                                    packages may even
                                                                                                    contain
                                                                                                    Hours limit. If your
                                                                                                    usage
                                                                                                    exceeds these
                                                                                                    limits,
                                                                                                    you
                                                                                                    will be charged for
                                                                                                    the
                                                                                                    excess KM used
                                                                                                    (and/or
                                                                                                    hour
                                                                                                    if applicable).
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>All road toll fees,
                                                                                                    parking
                                                                                                    charges, state taxes
                                                                                                    etc.
                                                                                                    are charged extra
                                                                                                    and
                                                                                                    need
                                                                                                    to be paid to the
                                                                                                    concerned
                                                                                                    authorities as per
                                                                                                    actuals.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>For driving between
                                                                                                    10:00
                                                                                                    pm
                                                                                                    to 6:00 am on any of
                                                                                                    the
                                                                                                    nights, an
                                                                                                    additional
                                                                                                    allowance will be
                                                                                                    applicable
                                                                                                    and is to be paid to
                                                                                                    the
                                                                                                    driver.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Please ensure you
                                                                                                    have
                                                                                                    covered all cities
                                                                                                    you
                                                                                                    plan
                                                                                                    to visit in your
                                                                                                    itinerary.
                                                                                                    This will help our
                                                                                                    driver
                                                                                                    prepare accordingly.
                                                                                                    Adding
                                                                                                    city to the
                                                                                                    itinerary
                                                                                                    during
                                                                                                    trip may not be
                                                                                                    possible.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>If your Trip has Hill
                                                                                                    climbs,
                                                                                                    cab AC may be
                                                                                                    switched
                                                                                                    off
                                                                                                    during such climbs.
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                    <div class="col-md-12 mt-3">
                                                                                        <h3 class="card__additonal-info-heading">

                                                                                            additional information
                                                                                        </h3>
                                                                                        <ul>


                                                                                            <li>
                                                                                                <p>Your Trip has a KM
                                                                                                    limit
                                                                                                    and
                                                                                                    in case of certain
                                                                                                    special
                                                                                                    packages may even
                                                                                                    contain
                                                                                                    Hours limit. If your
                                                                                                    usage
                                                                                                    exceeds these
                                                                                                    limits,
                                                                                                    you
                                                                                                    will be charged for
                                                                                                    the
                                                                                                    excess KM used
                                                                                                    (and/or
                                                                                                    hour
                                                                                                    if applicable).
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>All road toll fees,
                                                                                                    parking
                                                                                                    charges, state taxes
                                                                                                    etc.
                                                                                                    are charged extra
                                                                                                    and
                                                                                                    need
                                                                                                    to be paid to the
                                                                                                    concerned
                                                                                                    authorities as per
                                                                                                    actuals.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>For driving between
                                                                                                    10:00
                                                                                                    pm
                                                                                                    to 6:00 am on any of
                                                                                                    the
                                                                                                    nights, an
                                                                                                    additional
                                                                                                    allowance will be
                                                                                                    applicable
                                                                                                    and is to be paid to
                                                                                                    the
                                                                                                    driver.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>Please ensure you
                                                                                                    have
                                                                                                    covered all cities
                                                                                                    you
                                                                                                    plan
                                                                                                    to visit in your
                                                                                                    itinerary.
                                                                                                    This will help our
                                                                                                    driver
                                                                                                    prepare accordingly.
                                                                                                    Adding
                                                                                                    city to the
                                                                                                    itinerary
                                                                                                    during
                                                                                                    trip may not be
                                                                                                    possible.
                                                                                                </p>
                                                                                            </li>
                                                                                            <li>
                                                                                                <p>If your Trip has Hill
                                                                                                    climbs,
                                                                                                    cab AC may be
                                                                                                    switched
                                                                                                    off
                                                                                                    during such climbs.
                                                                                                </p>
                                                                                            </li>
                                                                                        </ul>
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
                                            </div>

                                        </div>




                                    </div>
                                </div>
                            </div>
                        @endforeach





                        </div>
                        <!-- /end cab variation 1  card ================================ -->

                    </section>
                </div>
            </div>

        </div>






        </div>
        </div>
        </div>
    </section>




    <!-- section End -->


    <!-- how to start section end -->


    <!-- how to start section end -->
@include('layouts.footerwidgets')
@include('layouts.footer')
