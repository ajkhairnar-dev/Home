@section('title', 'My Profile')
@section('metakey', 'My Profile Page' )
@section('metadesc', 'My Profile Page')
@include('layouts.nav')

<style>
    .modal-backdrop {
    z-index: 0!important;
    }
    .error{
        color:red;
    }
    .dashboard-section .dashboard-box .dashboard-detail .booking-box .detail-middle {
    width: 58%;
}
    </style> 
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
                                    <h5>{{ $data->name ? $data->name : "No Name"  }}</h5>
                                    <h6>+91{{ $data->mobile ? $data->mobile : "-"  }}</h6>
                                    <h6>{{ $data->email ? $data->email : "No Email"  }}</h6>
                                </div>
                            </div>
                            <div class="faq-tab">
                                <ul class="nav nav-tabs" id="top-tab" role="tablist">
                                    <!-- <li class="nav-item"><a data-bs-toggle="tab" class="nav-link active"
                                            href="#dashboard">dashboard</a></li> -->
                                    <li class="nav-item"><a class="nav-link" href="{{route('account')}}">profile</a></li>
                                    <li class="nav-item"><a class="nav-link active" href="#points">cabish points</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('mybookings')}}">bookings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="product_img_scroll" data-sticky_column>
                        <div class="faq-content tab-content" id="top-tabContent">




                            <div class="tab-pane fade show  active" id="points">
                                <div class="dashboard-main">

                                    <div class="dashboard-intro">
                                        <h5>welcome! <span>{{ $data->name ? $data->name : "-"  }}</span></h5>
                                        <p>you have completed {{ session()->get('isLogin')['cabishpoint'] }} cabish points.
                                        </p>
                                    </div>
                                   
                                    <div class="counter-section">
                                        <div class="row">
                                            <div class="col-xl-3 col-sm-6">
                                                <div class="counter-box">
                                                    <img src="assets/images/icon/taxi.png" class="img-fluid blur-up lazyload" alt="">
                                                    <h3><span class="ti-server" style="margin-right: 11px;"></span>{{ session()->get('isLogin')['cabishpoint'] }}</h3>
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
                                                        @foreach($points as $point)
                                                        <li>
                                                            Booking Id : {{$point->booking_id}} |
                                                            Date : {{$point->created_at}}
                                                            @if($point->types == 1)
                                                                <span class='btn-sm btn-primary' style="margin-left:10px;"> Credit </span>
                                                            @else
                                                                <span class='btn-sm btn-danger' style="margin-left:10px;"> Debit </span>
                                                            @endif
                                                            <span class='btn-sm btn-success'>{{$point->points}} Points</span>
                                                        </li>
                                                        @endforeach
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
    <div class="modal fade edit-profile-modal" id="edit-profile" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="javascript:;" id="profilesubmit">
                <div class="modal-body">
                   
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first">Full Name</label>
                                <input type="text" name="pname" class="form-control" id="pname" placeholder="Full Name" value="{{ $data->name ? $data->name : '' }}">
                                <label id="pname-error" class="error" for="pname" style="display: inline-block;"></label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">Email</label>
                                <input type="text" name="pemail" class="form-control" id="pemail" placeholder="Email Id" value="{{ $data->email ? $data->email : '' }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last">Mobile Number</label>
                                <input type="text" name="pmobile" class="form-control" id="pmobile" placeholder="Mobile Numbaer" value="{{ $data->mobile ? $data->mobile : '' }}">
                            </div>
                            
                        </div>
              
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-solid">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit profile modal start -->


    <!-- edit profile modal start -->
    <div class="modal fade edit-profile1-modal" id="edit-profile1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure want to Cancel Booking.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="javascript:;" id="cancelbooking">
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="first">Why cancelled booking ?</label>
                            <textarea id="remark" name="remark" rows="4" cols="50" placeholder="Why are you cancelled booking ?"></textarea>
                        </div>
                        </div>
              
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                    <button type="submit" class="btn btn-solid">Cancelled</button>
                </div>
                </form>
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
    


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  
    
<script>

var booking_id = 0;
 function cancelledid(bd){
    booking_id = bd
 }



    jQuery(function($){
    //passenger form validation
    if ($("#profilesubmit").length > 0) {
        console.log("jayesh")
        $("#profilesubmit").validate({
        
            rules: {
                pname: {
                    required: true,
                    maxlength: 50
                },
                pemail:{
                    required: true,
                    maxlength: 50,
                    email: true
                },
                pmobile:{
                    required: true,
                    digits:true,
                    minlength: 10,
                    maxlength:10
                }
            },
            messages: {
                pname: {
                    required: "Please enter fullname",
                    maxlength: "The fullName should less than or equal to 50 characters"
                },
                pemail:{
                    required: "Please enter valid email",
                    email: "Please enter valid email",
                    maxlength: "The email name should less than or equal to 50 characters",
                },
                pmobile:{
                    required: "Please enter contact",
                    maxlength: "Your contact maxlength should be 10 digit."
                }
            },

            
            submitHandler: function(form) {
                var tk = {!! json_encode(csrf_token()) !!}
                var object = {
                    _token:tk,
                    name : $("#pname").val(),
                    email : $("#pemail").val(),
                    mobile : $("#pmobile").val()
                }

                var url = {!! json_encode(url('updateprofile')) !!}
                $.redirect(url, object, "POST");
        
            }
    
        })
    }


    if ($("#cancelbooking").length > 0) {
        console.log("jayesh")
        $("#cancelbooking").validate({
        
            rules: {
                remark: {
                    required: true
                }
            },
            messages: {
                remark: {
                    required: "Please enter remark"
                }
            },
            submitHandler: function(form) {
                var tk = {!! json_encode(csrf_token()) !!}
                var object = {
                    _token:tk,
                    remark : $("#remark").val(),
                    booking_id : booking_id
                }

                var url = {!! json_encode(url('cancelledbooking')) !!}
                $.redirect(url, object, "POST");
        
            }
    
        })
    }
   
});
</script>

    @include('layouts.footer')

