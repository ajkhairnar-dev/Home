
@section('title', 'Cab Search')
@section('metakey', 'search cabs, cabs searching, oneway cabs, oneway cabs, roundtrip cabs, roundtirp, round trip cabs, airport, airport cabs, airport pickup and drop, airport taxi, airport transfer, local city package' )
@section('metadesc', 'get best deals on cab and holiday packages book now only with gocabish')
@include('layouts.nav')
    </header>
    <!-- section start -->
    <section class="section-b-space success-section">
        <div class="container">
            <div class="row success-detail mt-0">
                <div class="col">
                    <img src="../assets/images/cab/car/2.png" class="img-fluid blur-up lazyload" alt="">
                    <h2>Payment Successful ! get ready to ride</h2>
                    <p>thank you for you payment. we have received your payment successfully. your transaction ID is
                       "{{session()->get('bid')}}", you will get an email invoice soon!</p>
                    <!-- <button type="submit" class="btn btn-solid color1">download invoice</button> -->
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

    @include('layouts.footer')