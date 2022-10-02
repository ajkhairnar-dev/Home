@if(sizeof($offer))
    <section class="small-section top top_offer_section">

        <div class="title-1">
            <h2 class="pt-0">top offers</h2>
        </div>

        <div class="container ratio_59">
            <div class="row">
                <div class="col-md-12">
                    <div class="cab-slider center-slider-cab arrow-classic topTour mt-0">
                        @foreach($offer as $o)
                        <div>
                            <div class="topTour_box mt-0">
                                <div class="image-section">
                                    <img src="{{env('ADMIN_URL')}}{{$o->image}}" class="img-fluid blur-up lazyload bg-img" alt="">
                                </div>
                                <div class="content">
                                    <a href="{{route('single_offer',$o->slug)}}"><h5 class="content_h5">{{$o->title}}</h5></a>
                                    <h6 class="content_h6">{{$o->short_description}}</h6>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif