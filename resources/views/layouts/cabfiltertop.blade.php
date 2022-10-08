    <!-- search section start -->
    <div class="flight-search filter-sticky-top border-top">
        <div class="responsive-detail">
            <div class="destination">
                <span>{{$tripmeta['pickup']}}</span>
                <span><i class="fas fa-long-arrow-alt-right"></i></span>
                <span>{{$tripmeta['drop']}}</span>
            </div>
            <div class="details">
                <span>{{$tripmeta['ddate']}}</span>
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
                            @php 

                                

                            @endphp 

                            
                            <input type="text" class="form-control open-select-top-filteration"  placeholder="to" value="">

                            <div class="selector-box-flight">

                                <div class="form-check">
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="oneway-top-type" value="oneway" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios1">
                                        ONEWAY
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="round-top-type" value="roundtrip" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        ROUNDTIRP
                                    </label>
                                </div>
                                <div class="form-check">
                                    <!-- <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="exampleRadios3" value="localtrip" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios3">
                                        LOCAL
                                    </label> -->
                                    <input class="form-check-input radio_animated" type="radio" name="exampleRadios" id="" value="airport" tabindex="0">
                                    <label class="form-check-label" for="exampleRadios4">
                                        LOCALTRIP
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="search_result">
                            <div class="left-part " id="oneway">
                                <form action="/search" method="get" autocomplete="off">
                                <div class="form-flex">
                                    <div class="search-body">
                                        <h6>PICKUP LOCATION</h6>
                                        <input type="text" name="pickup"  class="form-control open-select" id="oneway-pickup" placeholder="pick up">
                                    </div>
                                    <div id="droplocation" class="search-body">
                                        <h6>DROP LOCATION</h6>
                                        <input type="text" name="drop" class="form-control open-select" id="oneway-drop" placeholder="drop off">
                                    </div>
                                    <div class="search-body">
                                        <h6>DEPATURE</h6>
                                        <input placeholder="pickup date & time" name="ddate" id="oneway-ddate" class="datetimepicker" placeholder="date" />
                                    </div>
                                    <div class="search-body">
                                        <h6>TIME</h6>
                                        <input type="text" name="dtime"  class="form-control timepicker" id="oneway-dtime" placeholder="time">
                                    </div>
                                    <div class="search-body btn-search">
                                        <div class="right-part">
                                            <button type="submit" class="btn btn-solid color1 rounded5">search</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                </form>
                            </div>


<!-- 
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
                            </div> -->

                            <div class="left-part " id="roundtrip" style="display:none;">
                                <div class="form-flex">
                                    <div class="search-body">
                                        <h6>From</h6>
                                        <input type="text" class="form-control open-select" name="pickup" id="round-pickup" placeholder="pick up">
                                    </div>
                                    <div class="search-body">
                                        <h6>To</h6>
                                        <input type="text"  class="form-control open-select" name="drop" id="round-drop"  placeholder="drop off">
                                    </div>
                                    <div class="search-body">
                                        <h6>Date</h6>
                                        <input placeholder="pickup date & time" name="ddate" id="round-ddate" class="datetimepicker"/>
                                    </div>
                                    <div class="search-body">
                                        <h6>TIME</h6>
                                        <input type="text" name="dtime" class="form-control timepicker" id="round-dtime" placeholder="time">
                                    </div>
                                    <div class="search-body">
                                        <h6>return</h6>
                                        <input placeholder="pickup date & time" name="rdate" id="round-rdate" class="datetimepicker1267" placeholder="date" />
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
                    <li data-filter="petrol">Petrol/CNG</li>
                    <li data-filter="diesel">Diesel</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- search section end -->
    <!-- tour section end -->