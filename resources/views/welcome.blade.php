@php
$title = $meta->title;
$metakey = $meta->meta_keywords;
$metadesc = $meta->meta_description;
@endphp

@section('title', $title)
@section('metakey', $metakey )
@section('metadesc', $metadesc)
@include('layouts.nav')

<div class="container-fluid border-top">
    <div class="row">
        <div class="col-12">
            <ul class="nav mix-pills nav-pills mb-3" id="pills-tab" role="tablist">

                <li class="nav-item">
                    <a class="nav-link active" id="pills-cab-tab" data-bs-toggle="pill" href="#pills-cab" role="tab" aria-controls="pills-cab" aria-selected="false">
                        Cabs
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="pills-cab-package" data-bs-toggle="pill" href="#pills-package" role="tab" aria-controls="pills-package" aria-selected="false">
                        Taxi Packages
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</header>
<!--  header end -->

@include('layouts.cabform')


@include('layouts.offers-widget')

@include('layouts.taxi-packages')

@include('layouts.super-section')

@include('layouts.testimonails')

@include('layouts.footerwidgets')
@include('layouts.footer')
