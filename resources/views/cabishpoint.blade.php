@include('layouts.nav')
<section class="small-section booking_confirmation">
        <div class="review-section">
            <div class="review_box">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td class="txtbold">Total Payable Amount</td>
                            <td class="txtbold">₹ {{$data['amount']}}</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="#" class="user user-light text-dark text-capitalize rounded5">
                                    <span class="ti-wallet"></span>
                                    <span class="icon-name ">Cabish Points Available {{$data['pts']}} points</span>
                                </a></td>
                        </tr>
                        <tr class="active cabpt">
                            <!-- <td class="txtmid">
                                <input type="hidden" id="price" value="2318">
                                <label><input type="checkbox" id="cabpoints" value="50" name="paytype"> <span class="ti-server"></span> Apply Cabish Points</label>
                            </td> -->

                            <td class="txtmid">
                                <input type="hidden" id="price" value="{{$data['amount']}}">
                                <input type="checkbox" id="cabpoints" value="{{$data['ptsrupees']}}" class="form-check-input checkbox_animated" name="paytype">
                                <label class="form-check-label title" for="cabpoints">Apply Cabish Points</label>
                            </td>
                            <td class="txtmid">₹{{$data['ptsrupees']}}</td>
                        </tr>

                        <tr class="msg" style="display:none;">
                            <td colspan="2" class="text-center">

                            </td>
                        </tr>



                        <tr>
                            <td colspan="2">
                                <a href="javascript:;" id="paynow" class="bluePrimarybtn payNow font22 appendBottom10">Pay ₹ <span id="pp">{{$data['amount']}}</span> Now
                            </a>
                        </td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mgalante/jquery.redirect@master/jquery.redirect.js"></script>
  
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

        
        
        jQuery(function($){
            $("#paynow").click(function(){
                var obj = {!! json_encode($data) !!}
                var url = {!! json_encode(url('paytm-payment')) !!}
                if($('#cabpoints').is(':checked')){
                    obj.amount = Number(obj.amount) - Number(obj.ptsrupees)
                    obj.isptsapply = 'YES'
                }else{
                    obj.amount = Number(obj.amount)
                    obj.isptsapply = 'NO'
                }
                console.log(obj)
                $.redirect(url, obj, "POST");
            });
        })
    </script>

    <!-- how to start section end -->

    @include('layouts.footer')