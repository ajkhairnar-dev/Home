@section('title', 'Login')
@section('metakey', 'Gocabish Login Page')
@section('metadesc', 'Gocabisg Login Page')
@include('layouts.nav')



 <!-- section start -->
    <section class="section-b-space dark-cls animated-section">
        <div class="animation-section">
            <div class="cross po-1"></div>
            <div class="cross po-2"></div>
            <div class="round po-4"></div>
            <div class="round po-5"></div>
            <div class="round r-y po-8"></div>
            <div class="square po-10"></div>
            <div class="square po-11"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6 offset-sm-2 col-sm-8 col-12">
                    <div class="account-sign-in">
                        <div class="title">
                            <h3>Login</h3>
                        </div>
                        
                        
                        <form name="" action="" method="post">
                <div class="modal-body">
                    <div class="book-btn-section border-top-0">
                        <div class="detail-top">
                            <div class="form-group">

                                <label>Mobile Number</label>
                                <input type="number" id="phone" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">

                                <label>OTP</label>
                                <input type="number" id="otp" class="form-control" placeholder="Enter 6 digit Otp">
                            </div>
                            <div class="form-group form-check ">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label style="margin-left:5px" class="form-check-label" for="exampleCheck1">By proceeding, you agree to gocabish <a href="{{route('terms')}}" target="_blank" style="text-decoration:underline">terms and conditions</a>, <a target="_blank" href="{{route('privacy')}}" style="text-decoration:underline">privacy policy</a></label>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" data-bs-dismiss="modal" class="btn btn-outline-success rounded">Get OTP</button> -->
                    <button disabled type="button" data-bs-dismiss="modal" class="btn btn-outline-success rounded ">Get otp</button>


                    <a href="./cabbooking.php" class="btn btn btn-secondary rounded">Submit OTP</a>
                </div>
                </form>
                        
                        
                        <!--<div class="login-with">-->
                        <!--    <h6>log in with</h6>-->
                        <!--    <div class="login-social row">-->
                        <!--        <div class="col">-->
                        <!--            <a class="boxes">-->
                        <!--                <img src="../assets/images/icon/social/facebook.png"-->
                        <!--                    class="img-fluid blur-up lazyload" alt="">-->
                        <!--                <h6>facebook</h6>-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--        <div class="col">-->
                        <!--            <a class="boxes">-->
                        <!--                <img src="../assets/images/icon/social/google.png"-->
                        <!--                    class="img-fluid blur-up lazyload" alt="">-->
                        <!--                <h6>google</h6>-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--    <div class="divider">-->
                        <!--        <h6>OR</h6>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--<form method="POST" action="{{ route('login') }}">-->
                        <!--    @csrf-->
                        <!--    <div class="form-group">-->
                        <!--        <label for="email">user name or Email address</label>-->
                        <!--        <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="email"-->
                        <!--            aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->
                        <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with-->
                        <!--            anyone else.</small>-->
                        <!--        @error('email')-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong>{{ $message }}</strong>-->
                        <!--            </span>-->
                        <!--        @enderror-->
                        <!--    </div>-->
                            
                            
                        <!--    <div class="form-group">-->
                        <!--        <label for="password">Password</label>-->
                        <!--        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->
                        <!--        @error('password')-->
                        <!--            <span class="invalid-feedback" role="alert">-->
                        <!--                <strong>{{ $message }}</strong>-->
                        <!--            </span>-->
                        <!--        @enderror-->
                        <!--    </div>-->
                        <!--    <div class="form-group form-check">-->
                        <!--        <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->
                        <!--        <label class="form-check-label" for="exampleCheck1">remember me</label>-->
                        <!--    </div>-->
                        <!--    <div class="button-bottom">-->
                        <!--        <button type="submit" class="w-100 btn btn-solid">login</button>-->
                        <!--        @if (Route::has('password.request'))-->
                        <!--            <a class="btn btn-link" href="{{ route('password.request') }}">-->
                        <!--                {{ __('Forgot Your Password?') }}-->
                        <!--            </a>-->
                        <!--        @endif-->
                        <!--        <div class="divider">-->
                        <!--            <h6>or</h6>-->
                        <!--        </div>-->
                        <!--        <button type="submit" class="w-100 btn btn-solid btn-outline"-->
                        <!--            onclick="window.location.href = '{{route('register')}}';">create account</button>-->
                        <!--    </div>-->
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

@include('layouts.footerwidgets')
@include('layouts.footer')
