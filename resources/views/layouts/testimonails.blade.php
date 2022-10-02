

<section class="testimonial-section  animated-section">
    <div class="animation-section">
        <div class="cross po-2"></div>
        <div class="round po-5"></div>
        <div class="round r-2 po-6"></div>
        <div class="round r-2 po-7"></div>
        <div class="round r-y po-8"></div>
        <div class="square po-10"></div>
        <div class="square s-2 po-12"></div>
    </div>
    <div class="container ">
        <div class="title-3 rounded">
            <span class="title-label">our</span>
            <h2>our happy customer<span>customer</span></h2>
        </div>
        <div class="slide-1">
            @foreach($testimonials as $t)
            <div>
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="testimonial">
                            <div class="left-part">
                                <img src="{{env('ADMIN_URL')}}{{$t->image}}" class="img-fluid blur-up lazyload" alt="">
                                <div class="design">
                                    <i class="fas fa-comments"></i>
                                    <i class="fas fa-comments light"></i>
                                </div>
                            </div>
                            <div class="right-part">
                                <p>
                                    {{$t->comments}}
                                </p>
                                <div class="detail">
                                    <div class="rating">
                                        @php
                                        for($i=0;$i<=$t->ratings;$i++) {
                                            echo '<i class="fas fa-star"></i>';
                                        }
                                        @endphp
                                    </div>
                                    <h6>{{$t->name}}</h6>
                                </div>
                            </div>
                            <div class="quote-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>