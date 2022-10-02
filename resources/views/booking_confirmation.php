@include('layouts.nav')
    </header>
    <!--  header end -->

    <section class="small-section booking_confirmation">
        <div class="review-section">
            <div class="review_box">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="txtbold">Total Payable Amount</td>
                            <td class="txtbold">₹ 2318</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="#" class="user user-light text-dark text-capitalize rounded5">
                                    <span class="ti-wallet"></span>
                                    <span class="icon-name ">Cabish Points Available 50 points</span>
                                </a></td>
                        </tr>
                        <tr class="active cabpt">
                            <!-- <td class="txtmid">
                                <input type="hidden" id="price" value="2318">
                                <label><input type="checkbox" id="cabpoints" value="50" name="paytype"> <span class="ti-server"></span> Apply Cabish Points</label>
                            </td> -->

                            <td class="txtmid">
                                <input type="hidden" id="price" value="2318">
                                <input type="checkbox" id="cabpoints" value="50" class="form-check-input checkbox_animated" name="paytype">
                                <label class="form-check-label title" for="cabpoints">Apply Cabish Points</label>
                            </td>
                            <td class="txtmid">₹50</td>
                        </tr>

                        <tr class="msg" style="display:none;">
                            <td colspan="2" class="text-center">

                            </td>
                        </tr>



                        <tr>
                            <td colspan="2"><a href="payment_success.php" class="bluePrimarybtn payNow font22 appendBottom10">Pay ₹ <span id="pp">2318</span> Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- booking section end -->


    <!-- book now section start -->
    <div class="book-panel">
        <h6 class="mb-0 text">grand total : <span>₹1250</span></h6>
        <button type="button" onclick="window.location.href='payment_success.php';" class="btn bottom-btn theme-color">continue</button>
    </div>
    <!-- book now section end -->


    <!-- how to start section end -->



    <script>
        $('#cabpoints').change(function(e) {
            if (this.checked == true) {
                var price = parseInt($('#price').val());
                var pt = parseInt($('#cabpoints').val());
                $('.msg').show();
                $('.msg td').append("<span class='alert alert-success'>Cabish Points Applied Successfully</span>");
                $('#pp').text(price - pt);
            } else {
                var price = parseInt($('#price').val());
                $('.msg td').html('');
                $('.msg').hide();
                $('#pp').text(price);
            }
        });
    </script>

@include('layouts.footer')