@include('layouts.nav')
    </header>
    <!--  header end -->

@include('layouts.cabfiltertop')


    <!-- section start -->
    <section class="pt-0 bg-inner small-section">
        <div class="container cabcontainer">
            <div class="row">
                
    @include('layouts.cabfilter')



                    <section class="category-wrapper rounded-1 pt-0 ">
                        <!-- cab  variation 1 card ================================ -->
                        <div class="row">

                            @foreach ($data[0] as $c)
                            
                            @php
                                $kms = $data[1];
                                $price = round(($kms*$c->rates)+(($kms*$c->rates)*0.05)+$data[2]);
                            @endphp

                            <div class="col-md-12">
                                <div class="content grid">
                                    <div>
                                        <div class="category-wrap wow fadeInUp grid-item" data-class="popular">
                                            <div class="category-img">
                                                <div class="label-offer">Certified</div>
                                                <a href="#"><img src="{{env('ADMIN_ASSET_URL').$c->vehicleimg}}" alt="" class="img-fluid blur-up lazyload"></a>
                                                <div class="side-effect"></div>
                                            </div>
                                            <div class="category-content">
                                                <div class="detail-wrap ">
                                                    <div class="card-details_header border px-3 py-3">
                                                        <div class="row ">

                                                            <div class="car-discription col-md-9">

                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div class="matchbox px-2 text-uppercase">
                                                                        {{$c->vehicletype}}</div>
                                                                    <div class="d-flex d-none d-md-block acpass">
                                                                        <div class="mobile-row d-flex gap-3 align-items-center ">

                                                                            <div class="ac-box"> <span class="ti-shine"></span>AC
                                                                            </div>
                                                                            <!-- <div class="">
                                                                        <img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png"> Gas
                                                                    </div> -->

                                                                            <div class="">
                                                                                <span class="ti-wheelchair"></span>

                                                                                <span>4</span> passenger
                                                                                allowed
                                                                            </div>



                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <!-- <div class="matchbox px-2 text-uppercase">
                                                                    MATCHBOX</div> -->
                                                                <!-- <h3 class="d-flex flex-column align-items-start fw-bolder ">
                                                                    Indica, wagon
                                                                    R<span class="p-1 fw-lighter similiar-badge ">Or Similiar</span>
                                                                </h3> -->

                                                                <div class="d-flex align-items-center gap-3">
                                                                    <h3 class="fw-bolder "> {{$c->vehicletitle}}</h3>

                                                                    <div class=" d-none d-md-block cng">
                                                                        <img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png">
                                                                        <p class="d-inline">CNG / Diesle</p>
                                                                    </div>

                                                                </div>
                                                                <span class="p-1 fw-lighter similiar-badge ">Or Similiar</span>

                                                            </div>

                                                            <div class="col-md-6 d-flex d-block d-lg-none">
                                                                <div class="mobile-row  d-flex gap-3 align-items-center ">

                                                                    <div class="ac-box"> <span class="ti-shine"></span>AC
                                                                    </div>
                                                                    <div class="cng">
                                                                        <img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png"> CNG / Diesel
                                                                    </div>

                                                                    <div class="passeng">
                                                                        <span class="ti-wheelchair"></span>

                                                                        <span>4</span> passenger
                                                                        allowed
                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <div class=" col-md-2 rating-counter-box">
                                                                <span class="block px-2 mx-1">{{$c->ratings}}
                                                                    ratings</span>
                                                                <span class="badge bg-success p-1">{{$c->stars}}/5</span>

                                                            </div>



                                                        </div>
                                                    </div>
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
                                                                        <p><img src="{{asset('images/icon/includekms.png')}}"/> {{$c->kms}} kms included. After that ₹{{$c->after_rates}}/km</p>
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

                                                                    <div class="discount_offer-badge">
                                                                      
                                                                    </div>
                                                                    
                                                                    <h6 class="fw-bolder">
                                                                        <span class="cross-price">₹100</span> ₹{{$price}}
                                                                    <form action="/booking" method="post">
                                                                         @csrf
                                                                        <input type="hidden" value="{{$c->vehicletype}}" name="vehicletype">
                                                                        <input type="hidden" value="{{$c->pickup}}" name="pickup">
                                                                        <input type="hidden" value="{{$c->id}}" name="packcode">
                                                                        <input type="hidden" value="{{$tripmeta['triptype']}}" name="triptype">
                                                                        <input type="hidden" value="{{$price}}" name="price">
                                                                        <input type="hidden" value="{{$tripmeta['ddate']}}" name="ddate">
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
                                                                <span class="fw-bolder"> 0 </span>Gocabish Points
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
@include('layouts.footerwidgets')
@include('layouts.footer')
