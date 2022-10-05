<footer>
    <div class="footer section-b-space section-t-space">
        <div class="container">
            <div class="row order-row">
                <div class="col-xl-2 col-md-6 order-cls">
                    <div class="footer-title mobile-title">
                        <h5>contact us</h5>
                    </div>
                    <div class="footer-content">
                        <div class="contact-detail">
                            <div class="footer-logo">
                                <img src="{{asset('images/logo/logo.svg')}}" alt="" class="img-fluid blur-up lazyload">
                            </div>
                            <ul class="contact-list">
                                <li><i class="fas fa-phone-alt"></i>+91 8989-2828-11</li>
                                <li><i class="fas fa-phone-alt"></i>+91 8989-2828-33</li>
                                <li><i class="fas fa-envelope"></i>info@gocabish.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-3">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5>about</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="{{route('about')}}">about us</a></li>
                                    <li><a href="{{route('faq')}}">FAQ</a></li>
                                    <li><a href="{{route('blogs')}}">Blogs</a></li>
                                    <li><a href="{{route('terms')}}">terms and conditions</a></li>
                                    <li><a href="{{route('privacy')}}">privacy</a></li>
                                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-2 col-md-3 order-cls">
                    <div class="footer-space">
                        <div class="footer-title">
                            <h5>useful links</h5>
                        </div>
                        <div class="footer-content">
                            <div class="footer-links">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li><a href="{{route('bookride')}}">Book a Ride</a></li>
                                    <li><a href="{{route('bookride')}}">My Profile</a></li>
                                    <li><a href="{{route('bookride')}}">My Trips</a></li>
                                    <li><a href="{{route('bookride')}}">Earnings</a></li>
                                    <li><a href="{{route('cabishpoints')}}">Cabish Points</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>top places</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-place">
                            <div class="row">
                                
                            @foreach($mintopplaces as $b)
                                <div class="col-4">
                                    <div class="place rounded5">
                                        <a href="{{route('placeblog',$b->slug)}}">
                                            <img src="{{env('ADMIN_URL').$b->thumbnail}}" class="img-fluid blur-up lazyload" alt="">
                                            <div class="overlay">
                                                <h6>{{$b->name}}</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6">
                    <div class="footer-title">
                        <h5>new topics</h5>
                    </div>
                    <div class="footer-content">
                        <div class="footer-blog">
                            <div class="media">
                                <div class="img-part rounded5">
                                    <a href="#"><img src="{{asset('images/cab/blog-footer/1.jpg')}}" class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled
                                        it to make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="img-part rounded5">
                                    <a href=""><img src="{{asset('images/cab/blog-footer/2.jpg')}}" class="img-fluid blur-up lazyload" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h5>recent news</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled
                                        it to make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
