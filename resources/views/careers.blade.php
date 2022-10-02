@section('title', 'Careers')
@section('metakey', 'careers,gocabish,best place to work' )
@section('metadesc', 'Helping India Go Places - At gocabish, work with industry experts, and build one-of-a-kind solutions in the booming travel')
@include('layouts.nav')
</header>


<!-- contact detail section start -->
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact_right contact_section">
                    <div class="row">
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Careers
                                    </h4>
                                </div>
                                <div class="contact_content">
                                    <h3>Current Job Openings</h3>
                                    
                                    <div class="accordion" id="accordionExample">
                                    @forelse($data as $d)
                                    
                                    
                                      <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading{{$d->id}}">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$d->id}}" aria-expanded="false" aria-controls="collapse{{$d->id}}">
                                            {{$d->title}}
                                          </button>
                                        </h2>
                                        <div id="collapse{{$d->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$d->id}}" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p><strong>{!! $d->short_description !!}</strong></p>
                                                <p>{!! $d->body !!}</p>
                                            </div>
                                        </div>
                                      </div>
                        
                                        
                                        @empty
                                        <h6>No Current Openings Availabel</h6>
                                    @endforelse
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="get-in-touch">
                        <h3>get in touch</h3>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="name" placeholder="first name" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" id="last-name" placeholder="last name" required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="review" placeholder="phone number" required="">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" id="email" placeholder="email address" required="">
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" placeholder="Write Your Message" id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 submit-btn">
                                    <button class="btn btn-solid" type="submit">Send Your Message</button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                    <div class="contact_content">
                                    <p>Please join us for the exciting opportunity to work with gocabish.com for better and secure career. We
                                        emphasize on personal as well as potential growth along with talent building. Please drop your CVs to
                                        <a href="mailto:careers@gocabish.com">careers@gocabish.com.</a>
                                    </p>
                        </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- contact detail section end -->

@include('layouts.footerwidgets')
@include('layouts.footer')
