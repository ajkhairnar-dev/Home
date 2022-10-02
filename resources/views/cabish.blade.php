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



    <section class="about-section section-b-space">
        <div class="container">
            <div class="title-1 detail-title">
            <h2>{{$meta->title}}</h2>
              {!! $meta->body !!}
            </div>
            
        </div>
        
    </section>

    <!-- testimonial section end -->
    
@include('layouts.footerwidgets')
@include('layouts.footer')