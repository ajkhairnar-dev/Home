@php
$title = $data->title;
$metakey = $data->meta_keywords;
$metadesc = $data->meta_description;
@endphp

@section('title', $title)
@section('metakey', $metakey )
@section('metadesc', $metadesc)
@include('layouts.nav')
</header>


<section class="about-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h2>{{$data->title}}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p>
                <div _ngcontent-tku-c48="" id="main"><p _ngcontent-tku-c48="" class="terms_content">

                   {!!$data->body!!}

                </p><br _ngcontent-tku-c48=""></div>
                </p>
            </div>
        </div>

    </div>
</section>

@include('layouts.footerwidgets')
@include('layouts.footer')
