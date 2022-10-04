@include('layouts.nav')
<style>
    .error{
        color:red
    }
    .bluePrimarybtn:hover {
    color: #fff !important;
}
    </style>
</header>
<!--  header end -->




<section class="small-section">
        <form method="post" action="javascript:;" id="bookingform">
        @csrf
           <div class="container">
              <div class="row">
                
                    <div class="col-lg-8">
                        <div class="review-section">
                        <div class="review_box review__booking">
                            <div class="title-top">
                                <h5>Review Booking</h5>
                            </div>
                            
                            
                            <div class="category-wrap wow fadeInUp">
                                        <div class="category-content">
                                            <div class="detail-wrap ">
                                                <div class="card-details_header shadow-sm px-3 py-3 rounded-3">
        
        
                                                    <div class="row-1">
        
                                                        <div class="category-img">
                                                            <div class="label-offer">Certified</div>
                                                            <a href="#"><img src="{{env('ADMIN_ASSET_URL').$vdata->image}}" alt="" class="img-fluid blur-up lazyload"></a>
                                                            <div class="side-effect"></div>
                                                        </div>
        
                                                        <div class="car-discription">
                                                            <div class="car_in-box">
                                                                <div class="d-flex gap-2 align-items-center">
                                                                    <div class="matchbox_new matchbox_desk px-2 text-uppercase">
                                                                        {{$data->vehicletype}}</div>
                                                                    <div class="d-none d-md-flex">
                                                                        <div class="mobile-row d-flex  gap-3 align-items-center ">
        
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
                                                                <div class="d-flex align-items-end gap-3">
                                                                    <div class="matchbox_new px-2 text-uppercase matchbox_mobile">
                                                                        {{$data->vehicletype}}</div>
                                                                    <h3 class="fw-bolder ">{{$vdata->title}}</h3>
                                                                    <div class="mt-1">
                                                                        <img style="width:15px; height:15px" alt="amentity" src="https://gos3.ibcdn.com/Cab_SRP_SKU_FuelType-1628160479.png"> Petrol+CNG / Diesel
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <span class="p-1 fw-lighter similiar-badge ">Or
                                                                Similiar</span>
                                                                <div class="flex car_type_mobile booking_car_type_mobile">
                                                                            <div class="ac-box"> <span class="ti-shine"></span>AC
                                                                            </div>
                                                                            
                                                                            <div class="passeng">
                                                                                <span class="ti-wheelchair"></span>
        
                                                                                <span>4</span> passenger
                                                                                allowed
                                                                            </div>
                                                                        </div>
        
                                                        </div>
        
                                                    </div>
        
        
        
                                                    <div class="row">
                                                        <div class="bottom_row">
                                                            <div class=" col-sm-12 col-md-6">
                                                                <div class="route">
                                                                    <!-- <h5><span class="ti-location-pin"></span>Nashik</h5>
                                                                    <span class="route_line"></span>
                                                                    <h5><span class="ti-target"></span>Mumbai</h5> -->
                                                                    @php 
                                                                        $pickup = explode(',', $data['pickup'] );
                                                                        $pickup = $pickup[0];

                                                                        $drop = explode(',', $data['drop'] );
                                                                        $drop = $drop[0];
                                                                    @endphp 
                                                                    <ul class="route-row">
                                                                        <li>
                                                                            <span class="ti-location-pin"></span>{{$pickup}}
                                                                        </li>
                                                                        <li class="route_line">
                                                                        </li>
                                                                        <li><span class="ti-target"></span>{{$drop}}</li>
                                                                        <li><span class="ti-calendar"></span>{{$data['ddate']}}</li>
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
                        <div class="review_box">
                            <div class="title-top">
                                <h5>Passanger Details</h5>
                            </div>
                            <div class="guest-detail">
                                
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8 col-lg-8 col-sm-12 first-name">
                                            <label>Full name</label>
                                            <input type="text" name="fullName" id="fullName" class="form-control" required />
                                            <label id="fullName-error" class="error" for="fullName" style="display: inline-block;"></label>
                                        </div>
                                        <div class="col-md-4 col-lg-4  col-sm-12">
                                            <label>Gender</label>
                                            <div class="form-control" style="display: flex; gap:5px">
                                                <label style="display: flex; align-items:center ;gap:5px; margin-bottom:0" for="male">
                                                <input type="radio" id="gender" name="gender" value="male" style="height: 18px;width: 18px;" checked>
                                                 Male</label>
                                                <label style="display: flex; align-items:center ;gap:5px; margin-bottom:0" for="female">
                                                <input type="radio" id="gender" name="gender" value="female" style="height: 18px;width: 18px;"> Female
                                            </label>
                                            </div>
                                            <label id="gender-error" class="error" for="gender" style="display: inline-block;"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <label>Email address</label>
                                            <input type="email" id="email" name="email" class="form-control">
                                            <label id="email-error" class="error" for="email" style="display: inline-block;"></label>
                                            <!-- <small id="emailHelp" class="form-text text-muted">Booking confirmation will be -->
                                            <!-- sent to this email ID.</small> -->
                                        </div>
                                        <div class="col-md-6 col-lg-6  col-sm-12">
                                            <label>contact number</label>
                                            <input type="text" id="contact" name="contact" class="form-control">
                                            <label id="contact-error" class="error" for="contact" style="display: inline-block;"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <label>Complete Pickup Address</label>
                                            <input type="text" id="pick-address" name="pickup"  class="pickupadd open-select form-control">
                                            <label id="pickup-error" class="error" for="pickup" style="display: inline-block;"></label>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-12">
                                            <label>Complete Drop Off Address</label>
                                            <input  type="text" id="drop-address" name="drop"  class="dropadd open-select form-control">
                                            <label id="drop-error" class="error" for="drop" style="display: inline-block;"></label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleFormControlTextarea1">special request</label>
                                    <textarea class="form-control" name="specialrequest" id="specialrequest" rows="3" placeholder=""></textarea>
                                    <label id="specialrequest-error" class="error" for="specialrequest" style="display: inline-block;"></label>
                                    </div>
                                    <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="acceptTC" name="acceptTC">
                                    <label style="margin-left:5px" class="form-check-label" for="exampleCheck1">Accept Terms and condtions</label>
                                    
                                    </div>
                                    <label id="acceptTC-error" class="error" for="acceptTC" style=""></label>
                                
                            </div>
                        </div>
                       
                        <div class="review_box">
                            <div class="title-top">
                                <h5>Cab and driver Details</h5>
                            </div>
                            <div class="flight_detail car-detail-box">
                                <div class="review_box">
                                    <div class="title-top inner-title-top">
                                    <h5>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 470 470" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 470 470">
                                            <g>
                                                <path d="M235,148.009c40.806,0,74.004-33.198,74.004-74.005C309.004,33.198,275.806,0,235,0s-74.004,33.198-74.004,74.004   C160.996,114.811,194.194,148.009,235,148.009z M235,15c32.535,0,59.004,26.469,59.004,59.004S267.535,133.009,235,133.009   s-59.004-26.47-59.004-59.005S202.465,15,235,15z"></path>
                                                <path d="m235,178.009c59.812,0 108.922,46.69 112.793,105.539h-173.333c-4.142,0-7.5,3.357-7.5,7.5s3.358,7.5 7.5,7.5h181.08c4.142,0 7.5-3.357 7.5-7.5 0-70.601-57.438-128.039-128.04-128.039s-128.04,57.438-128.04,128.039c0,4.143 3.358,7.5 7.5,7.5h30c4.142,0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.254c3.872-58.849 52.983-105.539 112.794-105.539z"></path>
                                                <path d="m140.408,377.712l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.147,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.147-41.263 29.227-29.77c1.958-1.994 2.645-4.913 1.781-7.571-0.862-2.658-3.133-4.615-5.89-5.078zm-38.437,34.577c-1.647,1.678-2.413,4.032-2.066,6.359l4.577,30.723-27.805-13.847c-2.105-1.049-4.581-1.049-6.687,0l-27.806,13.847 4.577-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.546 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.762,22.166z"></path>
                                                <path d="m302.075,377.712l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.146,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.146-41.263 29.227-29.77c1.958-1.994 2.645-4.913 1.781-7.571-0.864-2.658-3.135-4.615-5.892-5.078zm-38.437,34.577c-1.647,1.678-2.413,4.032-2.066,6.359l4.576,30.723-27.805-13.847c-1.053-0.524-2.198-0.786-3.343-0.786s-2.291,0.262-3.343,0.786l-27.805,13.847 4.576-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.545 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.762,22.165z"></path>
                                                <path d="m469.633,382.791c-0.864-2.659-3.134-4.616-5.892-5.079l-41.143-6.905-19.281-36.995c-1.292-2.479-3.855-4.034-6.651-4.034s-5.359,1.555-6.651,4.034l-19.281,36.995-41.143,6.905c-2.757,0.463-5.028,2.42-5.892,5.079-0.864,2.658-0.177,5.577 1.781,7.571l29.227,29.77-6.147,41.263c-0.412,2.766 0.748,5.53 3.01,7.173 2.26,1.644 5.249,1.892 7.751,0.646l37.344-18.597 37.344,18.597c1.058,0.526 2.203,0.786 3.342,0.786 1.557,0 3.104-0.484 4.409-1.433 2.262-1.643 3.422-4.407 3.01-7.173l-6.147-41.263 29.227-29.77c1.96-1.993 2.647-4.912 1.783-7.57zm-44.328,29.498c-1.647,1.678-2.413,4.032-2.066,6.359l4.577,30.723-27.806-13.847c-1.053-0.524-2.198-0.786-3.343-0.786-1.146,0-2.291,0.262-3.343,0.786l-27.805,13.847 4.577-30.723c0.347-2.327-0.418-4.682-2.066-6.359l-21.762-22.166 30.634-5.142c2.32-0.39 4.323-1.845 5.41-3.931l14.356-27.546 14.356,27.546c1.087,2.086 3.09,3.541 5.41,3.931l30.634,5.142-21.763,22.166z"></path>
                                                <path d="m235,108.009c9.831,0 19.184-4.272 25.66-11.721 2.717-3.126 2.387-7.863-0.739-10.581-3.127-2.718-7.864-2.387-10.581,0.739-3.625,4.171-8.853,6.563-14.34,6.563s-10.714-2.392-14.34-6.563c-2.718-3.126-7.455-3.456-10.581-0.739-3.126,2.718-3.457,7.455-0.739,10.581 6.476,7.448 15.829,11.721 25.66,11.721z"></path>
                                            </g>
                                        </svg>
                                        <svg enable-background="new 0 0 511.801 511.801" height="512" viewBox="0 0 511.801 511.801" width="512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m184.671 393.943h142.459c6.13 0 11.584-3.896 13.572-9.694l10.462-30.515c1.499-4.374.791-9.231-1.897-12.993-2.687-3.762-7.052-6.008-11.675-6.008h-163.383c-4.623 0-8.988 2.246-11.675 6.008-2.688 3.762-3.396 8.619-1.897 12.993l10.462 30.515c1.987 5.798 7.442 9.694 13.572 9.694zm152.034-44.229-10.028 29.247h-141.553l-10.028-29.247z"></path>
                                            <path d="m56.162 304.431c0 21.565 17.544 39.109 39.11 39.109s39.11-17.544 39.11-39.109-17.544-39.11-39.11-39.11-39.11 17.544-39.11 39.11zm63.238 0c0 13.304-10.824 24.128-24.128 24.128s-24.128-10.824-24.128-24.128c0-13.305 10.824-24.128 24.128-24.128s24.128 10.823 24.128 24.128z"></path>
                                            <path d="m455.639 304.431c0-21.565-17.544-39.11-39.11-39.11s-39.11 17.544-39.11 39.11c0 21.565 17.544 39.109 39.11 39.109s39.11-17.544 39.11-39.109zm-63.238 0c0-13.305 10.824-24.128 24.128-24.128s24.128 10.823 24.128 24.128c0 13.304-10.824 24.128-24.128 24.128s-24.128-10.824-24.128-24.128z"></path>
                                            <path d="m491.954 239.556h.238c10.758 0 19.51-8.752 19.51-19.51v-16.718c0-10.758-8.752-19.51-19.51-19.51h-46.95l-6.353-12.45c-1.88-3.686-6.394-5.146-10.077-3.268-3.685 1.881-5.148 6.392-3.268 10.077l23.675 46.397h-224.06c-3.726-32.203-31.152-57.292-64.343-57.292-33.186 0-60.608 25.089-64.332 57.292h-33.902l41.291-80.92c5.881-11.526 17.573-18.686 30.512-18.686h243.03c12.94 0 24.631 7.16 30.512 18.686l1.931 3.785c1.88 3.686 6.393 5.149 10.077 3.268 3.685-1.88 5.148-6.392 3.268-10.077l-1.931-3.785c-8.453-16.567-25.258-26.859-43.857-26.859h-35.217l-18.925-39.638c-3.655-7.656-11.499-12.603-19.983-12.603h-96.779c-8.484 0-16.328 4.947-19.983 12.603l-18.925 39.638h-33.217c-18.599 0-35.404 10.292-43.857 26.859l-23.969 46.973h-46.95c-10.758 0-19.51 8.752-19.51 19.51v16.718c0 10.758 8.752 19.51 19.51 19.51h.238c-12.357 10.074-19.848 25.327-19.848 41.743v146.378c0 14.545 11.833 26.378 26.378 26.378h40.916c14.545 0 26.378-11.833 26.378-26.378v-2.403c2.144.382 4.328.59 6.531.59h33.847c4.137 0 7.491-3.354 7.491-7.491s-3.354-7.491-7.491-7.491h-33.847c-6.242 0-12.253-2.627-16.493-7.207l-60.483-65.321c-5.317-5.742-8.246-13.215-8.246-21.041v-36.014c0-15.343 9.06-29.283 23.08-35.515l14.013-6.228h407.653l14.013 6.228c14.02 6.232 23.08 20.172 23.08 35.515v36.014c0 7.826-2.929 15.299-8.246 21.041l-60.483 65.322c-4.24 4.579-10.252 7.206-16.493 7.206h-242.757c-4.137 0-7.491 3.354-7.491 7.491s3.354 7.491 7.491 7.491h242.756c2.203 0 4.386-.208 6.531-.59v2.403c0 14.545 11.833 26.378 26.378 26.378h40.916c14.545 0 26.378-11.833 26.378-26.378v-146.378c.001-16.416-7.49-31.669-19.846-41.743zm-291.907-162.752c1.183-2.477 3.72-4.077 6.464-4.077h96.779c2.744 0 5.282 1.6 6.464 4.076l15.843 33.183h-141.393zm-127.33 337.05c1.811 1.956 3.819 3.695 5.975 5.205v8.619c0 6.284-5.112 11.397-11.397 11.397h-40.917c-6.284 0-11.397-5.112-11.397-11.397v-76.178zm-26.954-189.279h-26.154c-2.497 0-4.528-2.032-4.528-4.529v-16.718c0-2.497 2.031-4.528 4.528-4.528h39.306zm95.295-.001c3.032-7.974 10.734-13.666 19.759-13.666 9.03 0 16.735 5.692 19.769 13.666zm55.123-.004c-3.459-16.343-18.001-28.644-35.364-28.644-17.358 0-31.896 12.301-35.354 28.644h-13.881c3.624-23.917 24.322-42.306 49.235-42.306 24.918 0 45.621 18.389 49.245 42.306zm269.857.005-13.152-25.775h39.306c2.497 0 4.528 2.031 4.528 4.528v16.718c0 2.497-2.031 4.529-4.528 4.529zm30.781 203.102c0 6.284-5.112 11.397-11.397 11.397h-40.916c-6.284 0-11.397-5.112-11.397-11.397v-8.619c2.156-1.51 4.163-3.248 5.974-5.204l57.736-62.354z"></path>
                                            <path d="m175.88 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                            <path d="m209.617 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                            <path d="m243.354 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                            <path d="m277.09 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.357 7.5-7.5 7.5z"></path>
                                            <path d="m310.827 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                            <path d="m344.564 318.856c-4.142 0-7.5-3.358-7.5-7.5v-21.207c0-4.142 3.358-7.5 7.5-7.5s7.5 3.358 7.5 7.5v21.207c0 4.142-3.358 7.5-7.5 7.5z"></path>
                                        </svg>
                                        Driver / Cabs
                                    </h5>
                                    </div>
                                    <div class="flight_detail car-detail-box">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="cab-departure">
                                                Cab And Driver Details Will Be Shared Up To 30 Mins Prior To Departure.
                                            </h6>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                                <div class="review_box">
                                    <div class="title-top inner-title-top">
                                    <h5>
                                        <svg viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m496 390.617188v-69.234376c0-1.566406-.191406-3.144531-.574219-4.664062l-15.089843-60.375c-.664063-2.625-1.839844-5.03125-3.480469-7.136719l-49.703125-63.902343c-5.417969-6.953126-14.535156-10.160157-23.023438-8.847657-34.863281-48.65625-91.839844-80.457031-156.128906-80.457031-64.28125 0-121.238281 31.785156-156.105469 80.433594-8.488281-1.304688-17.621093 1.917968-23.046875 8.871094l-49.6875 63.886718c-1.65625 2.121094-2.832031 4.519532-3.496094 7.167969l-15.089843 60.359375c-.382813 1.519531-.574219 3.097656-.574219 4.664062v69.234376c0 1.566406.191406 3.144531.574219 4.664062l13.179687 52.71875h-13.753906v48h128v-48h-16v-24.550781c35.921875 36.101562 84.535156 56.550781 136 56.550781 51.519531 0 100.078125-20.414062 136-56.527344v24.527344h-16v48h128v-48h-13.753906l13.179687-52.71875c.382813-1.519531.574219-3.097656.574219-4.664062zm-248-278.617188c97.046875 0 176 78.953125 176 176 0 17.96875-2.703125 35.488281-7.953125 52.320312l-12.460937-41.542968c-1.960938-6.546875-6.265626-11.777344-11.800782-15.058594-2.289062-77.40625-65.824218-139.71875-143.785156-139.71875s-141.496094 62.3125-143.785156 139.71875c-5.535156 3.28125-9.839844 8.511719-11.800782 15.058594l-12.460937 41.542968c-5.25-16.839843-7.953125-34.34375-7.953125-52.320312 0-97.046875 78.953125-176 176-176zm191.351562 214.40625c.167969.671875.121094 1.371094-.136718 2.007812l-11.816406 29.53125c-.207032.519532-.613282.847657-1.03125 1.152344 5.183593-12.96875 8.921874-26.355468 11.136718-40.066406zm-86-9.046875 9.207032 27.632813c-16.679688 33.449218-47.160156 57.609374-82.558594 66.824218v-59.816406c0-30.871094 25.121094-56 56-56h18.128906c-1.359375 3.183594-2.128906 6.679688-2.128906 10.351562v2.671876c0 2.832031.457031 5.640624 1.351562 8.335937zm-211.480468-21.359375h18.128906c30.878906 0 56 25.128906 56 56v59.921875c-35.238281-9.019531-65.328125-32.683594-82.304688-66.257813l-.582031.296876 9.535157-28.601563c.894531-2.695313 1.351562-5.503906 1.351562-8.335937v-2.671876c0-3.671874-.769531-7.167968-2.128906-10.351562zm169.273437-11.488281c-1.769531-13.160157-6.496093-25.609375-13.960937-36.511719h72.328125c3.351562 10.167969 5.390625 20.894531 6.089843 32h-39.601562c-8.742188 0-17.097656 1.648438-24.855469 4.511719zm-178.066406-52.511719c20.824219-42.550781 64.441406-72 114.921875-72s94.097656 29.449219 114.921875 72zm-6.589844 16h72.328125c-7.464844 10.902344-12.191406 23.351562-13.960937 36.511719-7.757813-2.863281-16.113281-4.511719-24.855469-4.511719h-39.59375c.691406-11.105469 2.730469-21.832031 6.082031-32zm73.695313 44.289062c.878906-16.65625 7.59375-32.210937 19.222656-44.289062h57.1875c11.628906 12.070312 18.34375 27.625 19.222656 44.289062-19.175781 12.941407-31.816406 34.878907-31.816406 59.710938v62.921875c-5.273438.671875-10.609375 1.078125-16 1.078125-5.40625 0-10.734375-.382812-16-1.039062v-62.960938c0-24.832031-12.640625-46.769531-31.816406-59.710938zm-141.695313 26.734376c2.222657 13.71875 5.960938 27.105468 11.144531 40.074218-.417968-.296875-.832031-.625-1.039062-1.144531l-11.816406-29.527344c-.257813-.648437-.304688-1.347656-.136719-2.019531zm53.511719 160.976562h-96v-16h96zm-81.742188-32-14.257812-57.382812.097656-70.023438 15.078125-60.328125c.113281-.457031.3125-.867187.601563-1.226563l45.191406-58.109374c-9.074219 17.742187-15.496094 37.046874-18.671875 57.429687-1.152344 1.777344-2.058594 3.695313-2.578125 5.777344l-14.597656 58.398437c-.984375 3.945313-.714844 8.03125.808594 11.824219l11.8125 29.542969c2.9375 7.34375 9.960937 12.097656 17.882812 12.097656 8.566406 0 15.984375-5.511719 18.445312-13.726562l17.671876-58.898438c1.320312-4.414062 5.304687-7.375 9.914062-7.375 5.703125 0 10.34375 4.640625 10.34375 10.351562v2.671876c0 1.121093-.175781 2.214843-.527344 3.273437l-31.472656 94.40625v41.296875zm217.742188 16c-51.640625 0-100.160156-22.449219-133.695312-61.625l12.328124-36.976562c26.328126 41.386718 71.582032 66.601562 121.367188 66.601562 49.335938 0 95.144531-25.640625 121.367188-66.59375l12.320312 36.960938c-33.542969 39.191406-81.992188 61.632812-133.6875 61.632812zm232 16h-96v-16h96zm-80-32v-41.296875l-31.472656-94.40625c-.351563-1.058594-.527344-2.152344-.527344-3.273437v-2.671876c0-5.710937 4.640625-10.351562 10.34375-10.351562 4.609375 0 8.59375 2.960938 9.914062 7.375l17.671876 58.898438c2.460937 8.214843 9.878906 13.726562 18.445312 13.726562 7.921875 0 14.9375-4.753906 17.882812-12.113281l11.820313-29.542969c1.515625-3.785156 1.785156-7.863281.800781-11.816406l-14.597656-58.414063c-.519531-2.074219-1.425781-3.984375-2.578125-5.761719-3.167969-20.375-9.597656-39.679687-18.664063-57.414062l45.191407 58.109375c.273437.34375.472656.761719.585937 1.183594l15.183594 61.152343-.097656 70.023438-14.148438 56.59375zm0 0"></path>
                                            <path d="m272 288c0-13.230469-10.769531-24-24-24s-24 10.769531-24 24 10.769531 24 24 24 24-10.769531 24-24zm-32 0c0-4.414062 3.59375-8 8-8s8 3.585938 8 8-3.59375 8-8 8-8-3.585938-8-8zm0 0"></path>
                                            <path d="m248 16c19 0 36.871094 7.480469 50.320312 21.054688l11.367188-11.246094c-16.472656-16.640625-38.382812-25.808594-61.6875-25.808594s-45.214844 9.167969-61.679688 25.808594l11.367188 11.246094c13.441406-13.574219 31.3125-21.054688 50.3125-21.054688zm0 0"></path>
                                            <path d="m287.289062 48.441406c-10.496093-10.609375-24.449218-16.441406-39.289062-16.441406s-28.792969 5.832031-39.289062 16.441406l11.367187 11.246094c7.464844-7.535156 17.386719-11.6875 27.921875-11.6875s20.457031 4.152344 27.921875 11.6875zm0 0"></path>
                                            <path d="m231.113281 71.0625 11.375 11.25c2.953125-2.984375 8.070313-2.984375 11.023438 0l11.375-11.25c-9.007813-9.109375-24.765625-9.109375-33.773438 0zm0 0"></path>
                                        </svg>
                                        Actual Cab Images
                                    </h5>
                                    </div>
                                    <div class="flight_detail car-detail-box">
                                    <div class="row">
                                        <div class="col">
                                            <div class="boxes">
                                                <!-- <h6 class="diver-detail">Actual Cab Images
                                                </h6> -->
                                                <div class="row">
                                                <div class=" col-md-6  col-sm-2 row d-none d-md-block  ratio_59">
                                                    <div class="slide-1 zoom-gallery arrow-dark">
                                                        @php $imgdata = json_decode($vdata->interior_images); for($i=0;$i<count($imgdata);$i++) { @endphp
                                                        <div>
                                                            <img src="{{env('ADMIN_ASSET_URL').$imgdata[$i]}}" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">interior images</h6>
                                                        </div>
                                                        @php } @endphp
                                                    </div>
                                                </div>
                                                <div class=" col-md-6 col-sm-2 row d-none d-md-block ratio_59">
                                                    <div class="slide-1 zoom-gallery arrow-dark">
                                                        <div>
                                                            <img src="assets/images/cab/car/23.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">exterior images</h6>
                                                        </div>
                                                        <div>
                                                            <img src="assets/images/cab/car/24.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">exterior images</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="row ">
                                                <div class=" col-md-6  col-sm-2 d-block d-lg-none  ratio_59">
                                                    <div class="slide-1 zoom-gallery arrow-dark">
                                                        <div>
                                                            <img src="assets/images/cab/car/22.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">interior images</h6>
                                                        </div>
                                                        <div>
                                                            <img src="assets/images/cab/car/21.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">interior images</h6>
                                                        </div>
                                                        <div>
                                                            <img src="assets/images/cab/car/23.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">exterior images</h6>
                                                        </div>
                                                        <div>
                                                            <img src="assets/images/cab/car/24.jpg" class="img-fluid blur-up lazyload bg-img w-100" alt="">
                                                            <h6 class="view-all">exterior images</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="review_box">
                                    <div class="title-top inner-title-top">
                                    <h5>Additonal Infomation</h5>
                                    </div>
                                    <div class="flight_detail car-detail-box">
                                    <div class="boxes car-detail-inclu">
                                        <div class="row ">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <h6><strong>Inclusions</strong> (Included in the Price)</h6>
                                                <ul class="car-inner_ul ul-green">
                                                <li>Night charges ( 10 PM to 6 AM )</li>
                                                <li>State Tax</li>
                                                <li>Toll Charges</li>
                                                <li>587 Kms</li>
                                                <li>Driver Allowance</li>
                                                <li>Only One Pickup and Drop (Only one included)</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <h6><strong>Exclusions</strong> (Extra Charges)</h6>
                                                <ul class="car-inner_ul ul-red">
                                                <li>Waiting Charges</li>
                                                <li>After 45 mins, ₹ 2.0/min</li>
                                                <li>Fare beyond 587 Kms ₹ 14.5/Km</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
             
                        <div class="review_box">
                            <div class="title-top">
                                <h5>Read before you book!</h5>
                            </div>
                           
                                <div class="">
                                    <div class="description-section tab-section">
                                    <div class="menu-top menu-up">
                                        <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                            <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#includings">includings</a></li>
                                            <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#additional__information">Additional information</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="description-details tab-content" id="top-tabContent">
                                        <div class="menu-part p-0 tab-pane fade active show" id="includings">
                                            <ul class="includings-ul">
                                                <li>
                                                <p> Includes GST (5%) in the costing.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Includes Driver Day allowance.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Your Trip has a KM limit and in case of certain special packages may even contain Hours limit. If your usage exceeds these limits, you will be charged for the excess KM used (and/or hour if applicable).
                                                </p>
                                                </li>
                                                <li>
                                                <p>All road toll fees, parking charges, state taxes etc. are charged extra and need to be paid to the concerned authorities as per actuals.
                                                </p>
                                                </li>
                                                <li>
                                                <p>For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Please ensure you have covered all cities you plan to visit in your itinerary. This will help our driver prepare accordingly. Adding city to the itinerary during trip may not be possible.
                                                </p>
                                                </li>
                                                <li>
                                                <p>If your Trip has Hill climbs, cab AC may be switched off during such climbs.
                                                </p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="menu-part about tab-pane fade" id="additional__information">
                                            <ul class="additional__information-ul">
                                                <li>
                                                <p> Includes GST (5%) in the costing.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Includes Driver Day allowance.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Your Trip has a KM limit and in case of certain special packages may even contain Hours limit. If your usage exceeds these limits, you will be charged for the excess KM used (and/or hour if applicable).
                                                </p>
                                                </li>
                                                <li>
                                                <p>All road toll fees, parking charges, state taxes etc. are charged extra and need to be paid to the concerned authorities as per actuals.
                                                </p>
                                                </li>
                                                <li>
                                                <p>For driving between 10:00 pm to 6:00 am on any of the nights, an additional allowance will be applicable and is to be paid to the driver.
                                                </p>
                                                </li>
                                                <li>
                                                <p>Please ensure you have covered all cities you plan to visit in your itinerary. This will help our driver prepare accordingly. Adding city to the itinerary during trip may not be possible.
                                                </p>
                                                </li>
                                                <li>
                                                <p>If your Trip has Hill climbs, cab AC may be switched off during such climbs.
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
                    <div class="col-lg-4 res-margin">
                        
                        <div class="sticky_section">
                            <!--upper section ------------------>
                         <div class="review-section ">
                               <div class="boxes review_box"  id="price_details_link">
                                <div class="footer-title title-top">
                                    <h5 class="fare_title">Fare Details</h5>
                                </div>
                                <div class="footer-content">
                                     <div class="review_box-inner">
                                        <ul class="booking_calculation">
                                             <li><span>Base Fare <b>₹11046</b></span></li>
                                             <li><span>Night Charges <b>₹250</b></span></li>
                                             <li><span>Taxes & Fees <b>₹58</b></span></li>
                                             <li class="footer-title"><span>Total <b>₹58</b></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                          
                        
                        <!--upper section ------------------>
                        
                        
                        <div class="review-section mt-2">
                            
                            <div class="review_box">
                                <div class="">
                                    <div class="summery_box" style=" padding-top:10px">
                                        <table class="table table-borderless">
                                        <tbody>
                                        
                                            <tr class="pricetxt">
                                                <td class="txtmid">
                                                    <label class="form-check-label title">
                                                        <input type="radio" value="partialpayment" class=" paytypeaction form-check-input radio_animated" name="paytype"> 
                                                        <input type="hidden" value="499" class="form-check-input radio_animated" name="amount" id="partialpayment"> 
                                                        Make partial payment
                                                    </label>
                                                </td>
                                                <td class="txtmid">₹ 499</td>
                                            </tr>
                                            <tr class="pricetxt active">
                                                <td class="txtmid">
                                                    <label class="form-check-label title">
                                                        <input type="radio" value="fullpayment" class="paytypeaction form-check-input radio_animated" name="paytype" checked="checked"> 
                                                        <input type="hidden" value="{{round($data->price)}}" class="form-check-input radio_animated" name="amount" id="fullpayment"> 
                                                        Make full payment
                                                    </label>
                                                </td>
                                                <td class="txtmid">₹ {{round($data->price)}}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <div class="form-group mb-0 promo-box-">
                                                    <div class="promo-section">
                                                        <div class="form-group mb-0">
                                                            <label>have a coupon code?</label>
                                                            <div class="input-group">
                                                                <input type="text" id="promocodeText" class="form-control" placeholder="Promo Code">
                                                                
                                                                <div class="input-group-prepend">
                                                                <a class="applycoupon input-group-text" style="cursor:pointer" id="appliedCoupon">Apply</a>
                                                                </div>
                                                                
                                                            </div>
                                                            <label class=" selectcoupon error" style="display: none;">Please select coupon</label>
                                                        </div>
                                                        <div class="promos">
                                                            <div class="prmo-code-form">
                                                                <div class="form-check">
                                                                <input class=" promoaction form-check-input radio_animated" type="radio" name="promocode" value="promo500">
                                                                <input class="form-check-input radio_animated" type="hidden" name="discount" id="promo500" value="500">
                                                                <div>
                                                                    <label class=" form-check-label title" for="exampleRadios3" id="promo500">RICA500</label>
                                                                    <label class="form-check-label" for="exampleRadios3">
                                                                    Use RICA50, and get $50 off on first booking
                                                                    </label>
                                                                </div>
                                                                </div>
                                                                <div class="form-check">
                                                                <input class=" promoaction form-check-input radio_animated" type="radio" name="promocode"  value="promo10">
                                                                <input class="form-check-input radio_animated" type="hidden" name="discount" id="promo10" value="10">
                                                                <div>
                                                                    <label class="form-check-label title" for="exampleRadios4" id="promo10">CAB10</label>
                                                                    <label class="form-check-label" for="exampleRadios4">
                                                                    Use FLY10, and get 10% off upto $50 on cab ticket bookings.
                                                                    </label>
                                                                </div>
                                                                </div>
                                                                <div class="form-check">
                                                                <input class=" promoaction form-check-input radio_animated" type="radio" name="promocode"  value="promo80">
                                                                <input class="form-check-input radio_animated" type="hidden" name="discount" id="promo80" value="80">
                                                                <div>
                                                                    <label class="form-check-label title" for="exampleRadios5" id="promo80">CAB80</label>
                                                                    <label class="form-check-label" for="exampleRadios5">
                                                                    Upto 80% Off + Upto 40% Cashback on Cab booking & more + Extra
                                                                    10% off via ICICI Cards (10th-13th Oct)
                                                                    </label>
                                                                </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </td>
                                            </tr>
                                               <tr>
                                                <td colspan="2">
                                                    <div class="coupon_saved box" style="display:none;">
                                                        
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="submit" class="bluePrimarybtn payNow font22 appendBottom10">Pay ₹ <span id="showFinalAmount">{{round($data->price)}}</span> Now</button>
                                                     <!-- <a href="javascript:;" id="testButton" class="bluePrimarybtn payNow font22 appendBottom10">Pay ₹ <span>{{round($data->price)}}</span> Now</a> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                                    </div>
                        </div>
                            
                      
                        
                        
                    </div>
                            
                        </div>
                
              </div>
           </div>
        </form>
    </section>


<!-- booking section end -->
<!-- book now section start -->
<div class="book-panel">
   <h6 class="mb-0 text">grand total:
      <span class="d-inline-block txtlight">
      <a href="#price_details_link">₹1250<i class="fas fa-info-circle"></i></span></a>
      </span>
   </h6>
   <button type="button" onclick="window.location.href='payment_success.php';" class="btn bottom-btn theme-color">continue</button>
</div>
<!-- book now section end -->
<!-- how to start section end -->
<!-- how to start section end -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  
<script>

//payment type
var paytype ='fullpayment';             //fullpaymet by default selected
var amount = 0;
var selectedPromocode = '';
var finalselectedPromocode = '';
var discountAmount = 0;
var finaldiscountAmount = 0;
var finalamount = 0;
var mainprice = {!! json_encode(round($data->price)) !!}
$(document).ready(function(){	
    
    //paytype
    amount = $(`#${paytype}`).val();
    $('.paytypeaction').click(function(){
        finalamount=0;
        discountAmount=0;
        finaldiscountAmount = 0;
        selectedPromocode=''
        finalselectedPromocode = '';
        paytype = $("input[name='paytype']:checked").val();
        amount = $(`#${paytype}`).val();
        $(`#appliedCoupon`).text("Apply");
        $("#promocodeText").val('')
        $( ".promoaction" ).prop( "checked", false);
        $(`#showFinalAmount`).text(amount);
    }); 

    //select promocode
    $('.promoaction').click(function(){
        $(`#appliedCoupon`).text("Apply");
        $(".selectcoupon").hide()
        selectedPromocode = $("input[name='promocode']:checked").val();
        $("#promocodeText").val(selectedPromocode)
        discountAmount = $(`#${selectedPromocode}`).val();
    });

    //apply coupon
    $('.applycoupon').click(function(){
        if($('.promoaction').is(':checked')){
            $('.coupon_saved').show()
            $('.coupon_saved').html(`coupon code applyed and <br> you saved RS ${discountAmount}`)
            finalselectedPromocode = selectedPromocode
            finaldiscountAmount = discountAmount
            $(`#appliedCoupon`).text("Applied");
            finalamount = Number(amount) -  Number(finaldiscountAmount);
            $(`#showFinalAmount`).text(finalamount);
        }
        else{
            $(".selectcoupon").show()
        }
    });  
});


jQuery(function($){
//passenger form validation
  if ($("#bookingform").length > 0) {
    $("#bookingform").validate({
      
    rules: {
        fullName: {
            required: true,
            maxlength: 50
        },
        gender:{
            required:true
        },
        email:{
            required: true,
            maxlength: 50,
            email: true
        },
        contact:{
            required: true,
            digits:true,
            minlength: 10,
            maxlength:10
        },
        pickup:{
            required: true
        },
        drop:{
            required: true
        },
        specialrequest:{
            required:false
        },
        acceptTC:{
            required:true
        }
    },
    messages: {
        fullName: {
          required: "Please enter fullname",
          maxlength: "The fullName should less than or equal to 50 characters"
        },
        gender:{
            required: "Please select gender",
        },
        email:{
            required: "Please enter valid email",
            email: "Please enter valid email",
            maxlength: "The email name should less than or equal to 50 characters",
        },
        contact:{
            required: "Please enter contact",
            maxlength: "Your contact maxlength should be 10 digit."
        },
        pickup: {
          required: "Please enter pickup address"
        },
        drop: {
          required: "Please enter drop address"
        },
        specialrequest:{
            required:"Optional"
        },
        acceptTC:{
            required:"Please Accept T&C."
        }
    },

    
    submitHandler: function(form) {
      var tk = {!! json_encode(csrf_token()) !!}
      var object = {
        _token:tk,
        userdetails :{
            fullName : $("#fullName").val(),
            gender : $("#gender").val(),
            email : $("#email").val(),
            contact : $("#contact").val(),
            pickup : $(".pickupadd").val(),
            drop : $(".dropadd").val(),
            specialrequest : $("#specialrequest").val(),
            acceptTC : $("#acceptTC").val()
        },
        payment : {
            paytype : paytype,
            amount : finalamount == 0 ? Number(amount) : Number(finalamount),
            remaining: paytype == "fullpayment" ? 0 : Number(mainprice) - Number(finalamount),
            promocode : finalselectedPromocode,
            discountamount : finaldiscountAmount,
        },
        vehicles:{!! json_encode($vdata) !!},
        distance:{!! json_encode($distance) !!},
        triptype:{!! json_encode($triptype) !!},
        sitesetting : {!! json_encode($sitesetting) !!}
      }

   
      var url = {!! json_encode(url('cabishpoint')) !!}
      $.redirect(url, object, "POST");
   
    }
  })
 }
});

</script>

  @include('layouts.footer')


