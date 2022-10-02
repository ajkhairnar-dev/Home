
<style>
.otpshow{
    display:none;
}
.showalert{
    padding: 0.4rem 0.6rem!important;
    display:none;
}
.showerralert{
    padding: 0.4rem 0.6rem!important;
    display:none; 
}
</style>


<footer>
    <div class="sub-footer">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="footer-social">
                        <ul>
                            <li><a href="https://www.facebook.com/gocabishcar" target="_blank" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/gocabish/" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://goo.gl/maps/dKFS2cEVAxMZJZf98" target="_blank" title="google"><i class="fab fa-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="copy-right">
                        <p>copyright 2022 Gocabish | Proudly Made in India <i class="fas fa-heart"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- tap to top -->
<div class="tap-top">
    <div>
        <i class="fas fa-angle-up"></i>
    </div>
</div>



    <div class="modal fade registration_popUp" id="registration_popUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <img src="{{asset('images/logo/final_iline_logo.svg')}}" alt="" class="img-fluid blur-up lazyloaded" style="width:150px;">
                    </div>
                    <button type="button" class="btn-close model_close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="loginform" action="javascript:;" method="post">
                    <div class="modal-body">
                        <div class="book-btn-section border-top-0">
                            <div class="alert alert-success showalert" role="alert">
                                OTP sent on mobile number.
                            </div>
                            <div class="alert alert-danger showerralert " role="alert">
                                Please Enter valid OTP
                            </div>
                            <div class="detail-top">
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" name="mobilenumber" id="mobilenumber" class="form-control" placeholder="Enter Phone Number">
                                </div>
                                <div class="form-group otpshow">
                                    <label>OTP</label>
                                    <input type="number" name="otpverify" id="otpverify" class="form-control" placeholder="Enter 6 digit Otp">
                                </div>
                                <div class="form-group form-check otpshow" >
                                    <input type="checkbox" name="acceptloginTC" class="form-check-input" id="acceptloginTC">
                                    <label style="margin-left:5px" class="form-check-label" for="exampleCheck1">By proceeding, you agree to gocabish <a href="{{route('terms')}}" target="_blank" style="text-decoration:underline">terms and conditions</a>, <a target="_blank" href="{{route('privacy')}}" style="text-decoration:underline">privacy policy</a></label>
                                </div>
                                <div id="recaptcha-container"></div>
                                <span class="recaptchError error" style="display:none;">Please verify re-Capchta</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" data-bs-dismiss="modal" class="btn btn-outline-success rounded">Get OTP</button> -->
                        <button type="submit" class="btn btn-outline-success rounded OTPbutton">
                            Get OTP
                        </button>
                        <button type="submit" class="btn btn btn-secondary rounded otpshow">
                            Submit OTP
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>


<!-- tap to top end -->


<!-- latest jquery-->
<script src="{{asset('js/jquery-3.5.1.min.js')}}">
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script script src="{{asset('js/date-picker.js')}}">
</script>

<!-- tilt effect js-->
<script src="{{asset('js/tilt.jquery.js')}}"></script>

<!-- video js-->
<script src="{{asset('js/jquery.vide.min.js')}}"></script>

<!-- slick js-->
<script src="{{asset('js/slick.js')}}"></script>

<!-- slick js-->
<script src="{{asset('js/sticky-search.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- lazyload js-->
<script src="{{asset('js/lazysizes.min.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('js/script.js')}}"></script>
<script src="{{asset('js/cutom.js')}}"></script>
<script src="{{asset('js/jquery.fancyMessenger.js')}}"></script>
<!-- popper js  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

<!-- Added by jayesh  -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<!-- / -->

<script>
    $(document).ready(function() {
        $('.menu-tab').click(function() {
            $('.menu-hide').toggleClass('show');
            $('.menu-tab').toggleClass('active');
        });
        $('a').click(function() {
            $('.menu-hide').removeClass('show');
            $('.menu-tab').removeClass('active');
        });
    });
</script>


<script>


    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('.datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#datepicker3').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm'
    });
    $('#pickup').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('#dropoff').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('.mydate').datetimepicker({
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('.datetimepicker').datepicker({
        minDate:new Date(),
        uiLibrary: 'bootstrap4',
        modal: true,
        footer: true
    });
    $('#departure').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#return').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#during').datepicker({
        uiLibrary: 'bootstrap4'
    });
    
    $('.timepicker').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '00:00am',
    maxTime: '11:30pm',
    defaultTime: '10',
    startTime: '00:00',
    dynamic: false,
    dropdown: true,
    scrollbar: true
    });
</script>

<style type="text/css">
    .pulse {
      animation: pulse-animation 2s infinite;
    }

    .fancyMessenger-avatar {
        animation: pulse-animation 2s infinite;
        background-color: white;
        background-size: cover;
        background-image: url("{{asset('images/icon/customer-support.png')}}");
    }
    
    @keyframes pulse-animation {
      0% {
        box-shadow: 0 0 0 0px rgba(0, 0, 0, 0.2);
      }
      100% {
        box-shadow: 0 0 0 20px rgba(0, 0, 0, 0);
      }
    }
</style>



<script type="text/javascript">

var tk = {!! json_encode(csrf_token()) !!}
$.ajax({    
            type:'POST',  
            url:"http://127.0.0.1:8000/customer-registration",
            data: { _token:tk, mobile:"7028156545"}, 
            success: function (data, status, xhr) {
              console.log(data)
            },
            error: function (jqXhr, textStatus, errorMessage) {
                console.log("SDfffffffffffffffffffffffffffffffffff")
            }
});





$(document).ready(function() {
    
  var counter = 0;
  $("#addcity").click(function () {
   
    counter = counter+1
    $("#extracity").append(
      `<div class="search-body"><h6>To <span class="removethis">
      <i class="fa fa-times close" data-dismiss="alert"></i>Remove</span></h6>
      <input type="text" class="form-control open-select" name="round[]" id="rr${counter}" placeholder="City">
      </div>`
    );
    initialize();
  });
/*google map code*/
function initialize() {
    console.log('function initi');

    var acInputs = document.getElementsByClassName("open-select");
    for (var i = 0; i < acInputs.length; i++) {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((acInputs[i]), {
            types: ['geocode'],
            componentRestrictions: {
                country: "IN"
            }
        });
        autocomplete.inputId = acInputs[i].id;
    }
    
    google.maps.event.addListener(autocomplete, 'place_changed', function() {
            var near_place = autocomplete.getPlace();
    });
}
initialize();

$.fancyMessenger({
            onSend: function(obj) {
                // Send your message here.
                console.log($(obj).find("textarea").val());
                return true;
            },
            available: {
                fromHour: 8,
                untilHour: 16
            }
        });
    });
</script>

<script>


var isOtpSent = false;
var firebaseConfig = {
    apiKey: "AIzaSyCTa0dyZBZ2OsJ2r95zJNkK4qrYCcGQm5k",
    authDomain: "cbsdemo-158fa.firebaseapp.com",
    projectId: "cbsdemo-158fa",
    storageBucket: "cbsdemo-158fa.appspot.com",
    messagingSenderId: "316223645178",
    appId: "1:316223645178:web:6fea3fe99526712640b043",
    measurementId: "G-9EB4FSQ4BT"
};

firebase.initializeApp(firebaseConfig);

window.onload=function () {
    render();
};

function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}

function isVerifyRecapcha(){
    console.log(isOtpSent)
    if(isOtpSent){
        return true
    }else{
        if(grecaptcha.getResponse()){
            return true;
        }else{
            return false;
        }
    }
}

jQuery(function($){
//passenger form validation
  if ($("#loginform").length > 0) {
    $("#loginform").validate({
      
    rules: {
        mobilenumber:{
            required: true,
            digits:true,
            minlength: 10,
            maxlength:10
        },
    },
    messages: {
        mobilenumber:{
            required: "Please enter contact",
            maxlength: "Your contact maxlength should be 10 digit."
        },
    },

    
    submitHandler: function(form) {
        var isrecapchaVerify = isVerifyRecapcha();
        if (isrecapchaVerify) {
            var ActualMobileNumber;
            var tempMobileNumber = "+91"+$("#mobilenumber").val();
           
            $(".recaptchError").hide();
            $("#recaptcha-container").hide();

            if(!isOtpSent){
                isOtpSent = true;
                $(".OTPbutton").html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Sending...`);
                number = tempMobileNumber;
                ActualMobileNumber = tempMobileNumber
                firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
                
                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                console.log(coderesult);

                $(".showalert").show();
                $(".OTPbutton").html(`Get OTP`);
                $(".OTPbutton").hide();
                $(".otpshow").show();
                
                $("#loginform").validate();
                $( "#otpverify" ).rules( "add", {
                    required: true,
                    minlength: 6,
                    maxlength: 6,
                    messages: {
                        required: "Please enter OTP",
                        minlength: jQuery.validator.format("Your OTP should be 6 digit.")
                    }
                });

                $( "#acceptloginTC" ).rules( "add", {
                    required: true,
                    messages: {
                        required: "Please Accept T&C."
                    }
                });
                
                }).catch(function (error) {
                    console.log(error)

                    showerralert
                    $("#error").text(error.message);
                    $("#error").show();
                });
    
            }else{
                var code = $("#otpverify").val(); 
                coderesult.confirm(code).then(function (result) {
                    var user=result.user;
                    $(".showerralert").hide();
                    isOtpSent = false;
                    





                }).catch(function (error) {
                    $(".showerralert").show();
                });

                // 
                // var tk = {!! json_encode(csrf_token()) !!}
                // obj = {
                //     _token:tk,
                //     contact: ActualMobileNumber,

                // }

            }
        }else{
            $(".recaptchError").show();
        }
       

      
      

    //   var url = {!! json_encode(url('cabishpoint')) !!}
    //   $.redirect(url, object, "POST");
   
    }
  })
 }
});

</script>

<!-- Firebase  added by jayesh khairnar -->
<script type="text/javascript">



</script>
<!-- // -->


</body>
</html>
