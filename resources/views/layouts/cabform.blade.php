    <!-- section start -->
    <section class="home_section p-0">
        <div class="home home-padding">
            <img src="assets/images/flights/banner.jpg" class="bg-img img-fluid" alt="">
            <div class="animation-bg">
                <div class="container custom-container mix-layout-section">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <div class=" home-content mix-layout smaller-content">
                                <div class="bg-transparent">
                                    <div id="sticky_cls" class="tab-content" id="pills-tabContent">


                                        <!-- cab booking --->
                                        <div class="tab-pane fade show active hero-cabs-tab justify-content-center flex-column " id="pills-cab" role="tabpanel" aria-labelledby="pills-cab-tab">
                                            <div class="search-panel d-flex justify-content-center flex-column ">
                                                <h2 class="title-top">hire cab for any kind of trip</h2>
                                                <div class="search-section">


                                                    <div class="location-option d-flex justify-content-center flex-wrap">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="oneway" checked="checked" tabindex="0">
                                                            <label class="form-check-label" for="exampleRadios1">
                                                                ONEWAY
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="roundtrip" tabindex="0">
                                                            <label class="form-check-label" for="exampleRadios2">
                                                                ROUNDTIRP
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="localtrip" tabindex="0">
                                                            <label class="form-check-label" for="exampleRadios3">
                                                                LOCAL
                                                            </label>
                                                        </div>
                                                        
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="airport" tabindex="0">
                                                            <label class="form-check-label" for="exampleRadios4">
                                                                AIRPORT TRANSFERS
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="location-option text-center" id="airporttype" style="display:none">
                                                        <ul class="nav mix-pills nav-pills mb-3" id="pills-tab" role="tablist" style="margin:0 auto;">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-bs-toggle="pill" role="tab" aria-controls="pills-package" aria-selected="false" id="airpick" href="#">Airport
                                                                    Pikcup</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-bs-toggle="pill" role="tab" aria-controls="pills-package" aria-selected="false" id="airdrop" href="#">Airport Drop</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-bs-toggle="pill" role="tab" aria-controls="pills-package" aria-selected="false" id="airreturn" href="#">Airport Return</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="search-box rounded10">


                                                        <div class="left-part form-flex" id="oneway">
                                                            <div class="form-flex">
                                                                <form action="{{route('search')}}" method="get" autocomplete="off">
                                                                <input type="hidden" name="triptype" value="ONEWAY">
                                                                <div class="search-body">
                                                                    <h6>PICKUP LOCATION</h6>
                                                                    <input type="text" required="required" value="" name="pickup" class="form-control open-select" id="search_input" placeholder="pick up">
                                                                </div>
                                                                <div id="droplocation" class="search-body">
                                                                    <h6>DROP LOCATION</h6>
                                                                    <input type="text" required="required" value="" name="drop" class="form-control open-select" placeholder="drop off">
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>DEPATURE</h6>
                                                                    <input placeholder="Select Date" required="required" inputmode='none' name="ddate" value="" class="datetimepicker" />
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>Time</h6>
                                                                    <input placeholder="Select Time" required="required" inputmode='none' name="dtime" value="" class="form-control timepicker" />
                                                                </div>
                                                                <div class="search-body btn-search">
                                                                    <div class="right-part">
                                                                        <button type="submit" class="btn btn-solid color1 rounded5">search</button>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>



                                                        <div class="left-part " id="localtrip" style="display:none;"  autocomplete="off">
                                                            <div class="form-flex">
                                                                <form action="{{route('search')}}" method="get">
                                                                <input type="hidden" name="triptype" value="LOCALTRIP">
                                                                <div class="search-body">
                                                                    <h6>PICKUP LOCATION</h6>
                                                                    <input type="text" value="" required="required" name="pickup" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>DEPATURE</h6>
                                                                    <input required="required" placeholder="pickup date" name="ddate" inputmode='none' value="" class="datetimepicker" />
                                                                </div>
                                                                
                                                                <div class="search-body">
                                                                    <h6>TIME</h6>
                                                                    <input placeholder="pickup time" required="required" name="dtime" inputmode='none' value="" class="form-control timepicker" />
                                                                </div>

                                                                <div id="localpack" class="search-body">
                                                                    <h6>PACKAGE</h6>
                                                                    <div class="right-part">
                                                                        <select class="btn btn-solid p-2 color1 rounded5" name="pack_type" required="required">
                                                                            <option value="8">8 hrs 80 Kms</option>
                                                                            <option value="12">12 hrs 120 Kms</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="search-body btn-search">
                                                                    <div class="right-part">
                                                                        <button type="submit" class="btn btn-solid color1 rounded5">search</button>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>

                                                        <div class="left-part " id="roundtrip" style="display:none;"  autocomplete="off">
                                                            <div class="form-flex">
                                                                <form action="{{route('search')}}" method="get">
                                                                 <input type="hidden" name="triptype" value="ROUNDTRIP">
                                                                <div class="search-body">
                                                                    <h6>From</h6>
                                                                    <input type="text" required="required" name="pickup" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>To</h6>
                                                                    <input type="text" required="required" name="drop" class="form-control open-select" placeholder="drop off">
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>Date</h6>
                                                                    <input placeholder="Pickup Date" required="required" inputmode='none' name="ddate" value="1" class="datetimepicker" />
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>Time</h6>
                                                                    <input placeholder="Select Time" required="required" inputmode='none' name="dtime" value="" class="form-control timepicker" />
                                                                </div>
                                                                <div class="search-body">
                                                                    <h6>Return</h6>
                                                                    <input placeholder="Drop Off Date" required="required" inputmode='none' name="rdate" class="datetimepicker" />
                                                                </div>
                                                                <div id="extracity"></div>
                                                                <div class="search-body btn-search">
                                                                    <div class="right-part">
                                                                        <a href="#" id="addcity" required="required" class="btn btn-solid color1 rounded5">+Add
                                                                            Another
                                                                            City</a>
                                                                    </div>
                                                                </div>
                                                                <div class="search-body btn-search">
                                                                    <div class="right-part">
                                                                        <button type="submit" class="btn btn-solid color1 rounded5">search</button>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>


                                                        <!--airport--->

                                                        <div class="left-part " id="airport" style="display:none;">
                                                            <div class="form-flex">
                                                                <div id="airportpickup">
                                                                    <div class="search-body">
                                                                        <h6>PICKUP AIRPORT</h6>
                                                                        <input type="text"  value="" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
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


                                                            <div id="airportdrop" style="display:none;">
                                                                <div class="form-flex">
                                                                    <div class="search-body">
                                                                        <h6>DROP AIRPORT</h6>
                                                                        <input type="text" value="" class="form-control open-select" id="exampleInputEmail1" placeholder="pick up">
                                                                    </div>
                                                                    <div class="search-body">
                                                                        <h6>PIKCUP LOCATION</h6>
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


                                                            <div id="airportreturn" style="display:none;">
                                                                <div class="form-flex">
                                                                    <div class="search-body">
                                                                        <h6>AIPROT</h6>
                                                                        <input type="text" value="" class="form-control open-select" placeholder="Select Airport">
                                                                    </div>
                                                                    <div class="search-body">
                                                                        <h6>PICKUP LOCATION</h6>
                                                                        <input type="text" value="" class="form-control open-select" id="exampleInputEmail1" placeholder="Pickup Location">
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


                                                        </div>
                                                        <!---airport ends--->



                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- booking ends--->

                                        <!-- packages -->

                                        <div class="tab-pane  fade hero-cabs-tab justify-content-center flex-column  " id="pills-package" role="tabpanel" aria-labelledby="pills-cab-package">
                                            <div class="search-panel hero-plane-tab justify-content-center flex-column">
                                                <h2 class="title-top">Best Packages for Your Journey</h2>
                                                <div class="search-section">



                                                    <div class="search-box rounded10" style="max-width:1000px;">


                                                        <div class="left-part" id="taxioneway">

                                                            <div class="search-body">
                                                                <h6>CITY</h6>
                                                                <input type="text" value="" class="form-control open-select" id="search_input" placeholder="pick up">
                                                            </div>
                                                            <div id="droplocation" class="search-body">
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

                                                </div>
                                            </div>
                                        </div>

                                        <!-- packages end --->


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->