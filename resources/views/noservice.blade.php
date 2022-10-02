@include('layouts.nav')
    </header>
    <!--  header end -->


    <!-- tour section start -->
    <!-- search section start -->
    <div class="flight-search filter-sticky-top border-top">
        <div class="responsive-detail">
            <div class="destination">
                <span>Nashik, Maharashtra</span>
                <span><i class="fas fa-long-arrow-alt-right"></i></span>
                <span>Mumbai, Maharashtra</span>
            </div>
            <div class="details">
                <span>02:05, 19-Aug-2019</span>
                <span class="divider">|</span>
                <span>2 Adults</span>
            </div>
            <div class="modify-search">
                <a href="javascript:void(0)" class="btn btn-solid btn-curve color1"> modify search</a>
            </div>
        </div>
        <div class="flight-search-detail res-cab">
            <form class="row m-0">
                <div class="col ">

                    <div class="search-box">
                        <div class="form-group">
                            <label>Trip type</label>
                            <input type="text" class="form-control open-select" placeholder="to">

                            <div class="selector-box-flight">

                                <div class="form-check">
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios1" value="oneway" checked="checked" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios1">
                                        ONEWAY
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios2" value="roundtrip" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        ROUNDTIRP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <!-- <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios3" value="localtrip" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios3">
                                        LOCAL
                                    </label> -->
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios4" value="airport" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios4">
                                        LOCALTRIP
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="search_result">
                            <div class="left-part " id="oneway">
                                <div class="form-flex">
                                    <div class="search-body">
                                        <h6>PICKUP LOCATION</h6>
                                        <input type="text" value="" class="form-control open-select" id="search_input" placeholder="pick up">
                                    </div>
                                    <div id="droplocation" class="search-body">
                                        <h6>DROP LOCATION</h6>
                                        <input type="text" value="" class="form-control open-select" placeholder="drop off">
                                    </div>
                                    <div class="search-body">
                                        <h6>DEPATURE</h6>
                                        <input placeholder="pickup date & time" value="02:05 11/13/2019" class="datetimepicker" />
                                    </div>
                                    <div class="search-body btn-search">
                                        <div class="right-part">
                                            <a href="cablist.php" class="btn btn-solid color1 rounded5">search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="left-part " id="airport" style="display:none;">
                                <div class="form-flex">
                                    <div class="search-body">
                                        <h6>PICKUP LOCATION</h6>
                                        <input type="text" value="Paris, France" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
                                    </div>
                                    <div class="search-body">
                                        <h6>DEPATURE</h6>
                                        <input placeholder="pickup date & time" value="02:05 11/13/2019" class="datetimepicker" />
                                    </div>

                                    <div id="localpack" class="search-body">
                                        <h6>PACKAGE</h6>
                                        <div class="right-part">
                                            <select class="btn btn-solid p-2 color1 rounded5">
                                                <option>4 hrs 40 Kms</option>
                                                <option>8 hrs 80 Kms</option>
                                                <option>12 hrs 120 Kms</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="search-body btn-search">
                                        <div class="right-part">
                                            <a href="cablist.php" class="btn btn-solid color1 rounded5">search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="left-part " id="roundtrip" style="display:none;">
                                <div class="form-flex">
                                    <div class="search-body">
                                        <h6>From</h6>
                                        <input type="text" value="Paris, France" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
                                    </div>
                                    <div class="search-body">
                                        <h6>To</h6>
                                        <input type="text" value="Toulouse, France" class="form-control open-select" placeholder="drop off">
                                    </div>
                                    <div class="search-body">
                                        <h6>pickup</h6>
                                        <input placeholder="pickup date & time" value="02:05 11/13/2019" id="pickup" />
                                    </div>
                                    <div class="search-body">
                                        <h6>return</h6>
                                        <input placeholder="drop off date & time" value="02:05 12/13/2019" id="dropoff" />
                                    </div>
                                    <!-- <div id="extracity"></div> -->
                                    <!-- <div class="search-body btn-search">
                                        <div class="right-part">
                                            <a href="#" id="addcity" class="btn btn-solid color1 rounded5">+Add
                                                Another
                                                City</a>
                                        </div>
                                    </div> -->
                                    <div class="search-body btn-search">
                                        <div class="right-part">
                                            <a href="#" class="btn btn-solid color1 rounded5">search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="responsive-close">
                    <i class="far fa-times-circle"></i>
                </div>


            </form>
        </div>

        <div class="py-2 bg-white border-top shadow-sm">

        <div class="filters respon-filter-content filter-button-group ml-auto">
                <ul class="carType_filter-ul">
                    <li class="active" data-filter="all">All</li>
                    <li data-filter="petrol">Petrol</li>
                    <li data-filter="diesel">Diesel</li>
                    <li data-filter="cngDiesel">CNG / Diesel</li>
                </ul>
        </div>
    </div>

    <!-- search section end -->
    <!-- tour section end -->


    <!-- section start -->
    <section class="pt-0 bg-inner small-section">
        <div class="container cabcontainer">
            <div class="row">
                <!--<div class="col-lg-3">-->
                <!--    <div class="left-sidebar ">-->
                <!--        <div class="back-btn">-->
                <!--            back-->
                <!--        </div>-->
                <!--        <div class="search-bar">-->
                <!--            <input type="text" placeholder="Search here..">-->
                <!--            <i class="fas fa-search"></i>-->
                <!--        </div>-->
                <!--        <div class="middle-part collection-collapse-block open">-->
                <!--            <a href="javascript:void(0)" class="section-title collapse-block-title">-->
                <!--                <h5>latest filter</h5>-->
                <!--                <img src="assets/images/icon/adjust.png" class="img-fluid blur-up lazyload" alt="">-->
                <!--            </a>-->
                <!--            <div class="collection-collapse-block-content ">-->
                <!--                <div class="filter-block">-->
                <!--                    <div class="collection-collapse-block open">-->
                <!--                        <h6 class="collapse-block-title">car type</h6>-->
                <!--                        <div class="collection-collapse-block-content">-->
                <!--                            <div class="collection-brand-filter">-->
                <!--                                <div class="form-check collection-filter-checkbox">-->
                <!--                                    <input type="checkbox" class="form-check-input" id="hatchback">-->
                <!--                                    <label class="form-check-label" for="hatchback">HATCHBACK</label>-->
                <!--                                </div>-->


                <!--                                <div class="form-check collection-filter-checkbox">-->
                <!--                                    <input type="checkbox" class="form-check-input" id="sedan">-->
                <!--                                    <label class="form-check-label" for="sedan">SEDAN</label>-->
                <!--                                </div>-->


                <!--                                <div class="form-check collection-filter-checkbox">-->
                <!--                                    <input type="checkbox" class="form-check-input" id="suv">-->
                <!--                                    <label class="form-check-label" for="suv">SUV</label>-->
                <!--                                </div>-->


                <!--                                <div class="form-check collection-filter-checkbox">-->
                <!--                                    <input type="checkbox" class="form-check-input" id="premiumsuv">-->
                <!--                                    <label class="form-check-label" for="premiumsuv">PREMIUM SUV</label>-->
                <!--                                </div>-->

                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="bottom-info">-->
                <!--            <h5><span>i</span> need help</h5>-->
                <!--            <h4><a href="tel:+918989282811">+91 89892 82811</a></h4>-->
                <!--            <h4><a href="tel:+918989282833">+91 89892 82833</a></h4>-->
                <!--            <h6>Available 24X7</h6>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            <div class="not_found_center">
                <h3>
                We are working on this destination service     
                </h3>
                <div>
                    Do contact us on  8989-2828-11
                </div>
            </div>
            
            
            

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
