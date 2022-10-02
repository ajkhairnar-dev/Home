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
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active" href="#profile">profile</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#points">cabish points</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="nav-link" href="#bookings">bookings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product_img_scroll" data-sticky_column>
                        <div class="faq-content tab-content" id="top-tabContent">




                            <div class="tab-pane fade " id="points">
                                <div class="dashboard-main">

                                    <div class="dashboard-intro">
                                        <h5>welcome! <span>Ravishankar Pal</span></h5>
                                        <p>you have completed 50 cabish points.
                                        </p>
                                    </div>

                                    <div class="counter-section">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="counter-box">
                                                    <img src="assets/images/icon/taxi.png" class="img-fluid blur-up lazyload" alt="">
                                                    <h3><span class="ti-server"></span>50</h3>
                                                    <h5>Points</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dashboard-info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="activity-box">
                                                    <h6>recent activity</h6>
                                                    <ul>
                                                        <li>
                                                            Date: 15th June 2022Nashik to Mumbai
                                                            <span class='btn-sm btn-success'>20 Points</span>
                                                        </li>
                                                        <li>
                                                            Date: 15th June 2022Nashik to Mumbai
                                                            <span class='btn-sm btn-danger'>20 Points</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade show  active" id="profile">
                                <div class="dashboard-box">
                                    <div class="dashboard-title">
                                        <h4>profile</h4>
                                        <span data-bs-toggle="modal" data-bs-target="#edit-profile">edit</span>
                                    </div>
                                    <div class="dashboard-detail border p-3  rounded shadow-sm">
                                        <ul>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>name</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->username}}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>birthday</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>21/04/1993</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>gender</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>name</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>street address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>Pathardi</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>city/state</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>Nashik, Maharashtra</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>zip</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>422010</h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dashboard-box">
                                    <div class="dashboard-title">
                                        <h4>login details</h4>
                                    </div>
                                    <div class="dashboard-detail border p-3  rounded shadow-sm">
                                        <ul>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>email address</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>{{$user->email}}</h6>
                                                        <span data-bs-toggle="modal" data-bs-target="#edit-address">edit</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="border-bottom p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>phone no:</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>+91 7447344789</h6>
                                                        <span data-bs-toggle="modal" data-bs-target="#edit-phone">edit</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class=" p-1">
                                                <div class="details">
                                                    <div class="left">
                                                        <h6>password</h6>
                                                    </div>
                                                    <div class="right">
                                                        <h6>&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;</h6>
                                                        <span data-bs-toggle="modal" data-bs-target="#edit-password">edit</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="bookings">
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


    <!-- setting start -->
    <div class="theme-setting">
        <div class="dark">
            <input class="tgl tgl-skewed" id="dark" type="checkbox">
            <label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="dark"></label>
        </div>
        <div class="rtl">
            <input class="tgl tgl-skewed" id="rtl" type="checkbox">
            <label class="tgl-btn" data-tg-off="RTL" data-tg-on="LTR" for="rtl"></label>
        </div>
    </div>
    <!-- setting end -->


    <!-- edit profile modal start -->
    <div class="modal fade edit-profile-modal" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first">first name</label>
                                <input type="text" class="form-control" id="first" placeholder="first name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">last name</label>
                                <input type="text" class="form-control" id="last" placeholder="last name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="gender">gender</label>
                                <select id="gender" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>female</option>
                                    <option>male</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>birthday</label>
                                <input class="form-control" placeholder="18 april" id="datepicker" />
                            </div>
                            <div class="form-group col-12">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit profile modal start -->


    <!-- edit address modal start -->
    <div class="modal fade edit-profile-modal" id="edit-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">change email address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="old">old email</label>
                                <input type="email" class="form-control" id="old">
                            </div>
                            <div class="form-group col-12">
                                <label for="new">enter new email</label>
                                <input type="email" class="form-control" id="new">
                            </div>
                            <div class="form-group col-12">
                                <label for="comfirm">confirm your email</label>
                                <input type="email" class="form-control" id="comfirm">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit address modal start -->


    <!-- edit phone no modal start -->
    <div class="modal fade edit-profile-modal" id="edit-phone" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">change phone no</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="ph-o">old phone no</label>
                                <input type="number" class="form-control" id="ph-o">
                            </div>
                            <div class="form-group col-12">
                                <label for="ph-n">enter new phone no</label>
                                <input type="number" class="form-control" id="ph-n">
                            </div>
                            <div class="form-group col-12">
                                <label for="ph-c">confirm your phone no</label>
                                <input type="number" class="form-control" id="ph-c">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit phone no modal start -->


    <!-- edit password modal start -->
    <div class="modal fade edit-profile-modal" id="edit-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">change email address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-12">
                                <label for="p-o">old password</label>
                                <input type="email" class="form-control" id="p-o">
                            </div>
                            <div class="form-group col-12">
                                <label for="p-n">enter new password</label>
                                <input type="email" class="form-control" id="p-n">
                            </div>
                            <div class="form-group col-12">
                                <label for="p-c">confirm your password</label>
                                <input type="email" class="form-control" id="p-c">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit password modal start -->


    <!-- edit password modal start -->
    <div class="modal fade edit-profile-modal" id="edit-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">edit your card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="name">name on card</label>
                            <input type="text" class="form-control" id="name" placeholder="Mark jecno">
                        </div>
                        <div class="form-group">
                            <label for="number">card number</label>
                            <input type="text" class="form-control" id="number" placeholder="7451 2154 2115 2510">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="expiry">expiry date</label>
                                <input type="text" class="form-control" id="expiry" placeholder="12/23">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cvv">cvv</label>
                                <input type="password" maxlength="3" class="form-control" id="cvv" placeholder="&#9679;&#9679;&#9679;">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">update card</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit password modal start -->


    <!-- add card modal start -->
    <div class="modal fade edit-profile-modal" id="add-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">add new card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="a-month">card type</label>
                            <select id="a-month" class="form-control">
                                <option selected>add new card...</option>
                                <option>credit card</option>
                                <option>debit card</option>
                                <option>debit card with ATM pin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="a-na">name on card</label>
                            <input type="text" class="form-control" id="a-na">
                        </div>
                        <div class="form-group">
                            <label for="a-n">card number</label>
                            <input type="text" class="form-control" id="a-n">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="a-e">expiry date</label>
                                <input type="text" class="form-control" id="a-e">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="a-c">cvv</label>
                                <input type="password" maxlength="3" class="form-control" id="a-c">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">add card</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit password modal start -->


    <!-- add card modal start -->
    <div class="modal fade edit-profile-modal" id="delete-account" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Account deletion request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <p class="text-dark">Before you leave, please tell us why you'd like to delete your Rica account.
                        This information will help us improve. (optional)</p>
                    <form>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-solid">delete my account</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit password modal start -->
    
    @include('layouts.footer')

