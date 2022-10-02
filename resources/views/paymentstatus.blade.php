@include('layouts.nav')
{{ print_r($data, true) }}
{{ print_r($booking, true) }}
    <!-- section start -->
    <section class="section-b-space success-section">
        <div class="container">
            <div class="row success-detail mt-0">
                <div class="col">
                    <img src="../assets/images/cab/car/2.png" class="img-fluid blur-up lazyload" alt="">
                    <h2>Payment Successful ! get ready to ride</h2>
                    <p>thank you for you payment. we have received your payment successfully. your transaction ID is
                        "{{$data['TXNID']}}", you will get an email invoice soon!</p>
                    <button type="submit" class="btn btn-solid color1">download invoice</button>
                </div>
            </div>
        </div>
    </section>
    <!-- section End -->

@include('layouts.footer')