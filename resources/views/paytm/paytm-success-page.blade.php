<div class="alert alert-success alert-dismissible fade" role="alert">
    <strong>Payment Has been Successfully Received</strong>
</div>

{{dd($data);}}
{{dd(session()->get('bookingdetail'))}}

<a href="{{route('paytm.purchase')}}">Check the demo again</a>
