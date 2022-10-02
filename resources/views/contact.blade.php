@php
$title = $meta->title;
$metakey = $meta->meta_keywords;
$metadesc = $meta->meta_description;
@endphp

@section('title', $title)
@section('metakey', $metakey )
@section('metadesc', $metadesc)
@include('layouts.nav')
</header>


    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
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
                </div>
                <div class="col-md-4 contact_right contact_section">
                    <div class="row">
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <h4>Headquater</h4>
                                </div>
                                <div class="contact_content">
                                    <p>Maharashtra, India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-envelope"></i>
                                    <h4>email address</h4>
                                </div>
                                <div class="contact_content">
                                    <ul>
                                        <li>support@gocabish.com</li>
                                        <li>info@gocabish.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-6">
                            <div class="contact_wrap">
                                <div class="title_bar">
                                    <i class="fas fa-phone-alt"></i>
                                    <h4>phone</h4>
                                </div>
                                <div class="contact_content">
                                    <ul>
                                        <li>+91 89892 82811</li>
                                        <li>+91 89892 82833</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact detail section end -->


@include('layouts.footerwidgets')
@include('layouts.footer')
