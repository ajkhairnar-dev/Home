
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
      <title>Rica | Email template </title>
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap"
         rel="stylesheet">
      <style type="text/css">
         body {
         font-family: Nunito, sans-serif;
         position: relative;
         background: white;
         font-size: 14px;
         color: black;
         }
         ul {
         margin: 0;
         padding: 0;
         }
         li {
         /* display: inline-block; */
         /* text-decoration: unset; */
         }
         ul.includings-ul {
         margin-left: 17px;
         }
         a {
         text-decoration: none;
         }
         .btn {
         background-color: #292929;
         border-color: transparent;
         -webkit-print-color-adjust: exact;
         letter-spacing: 0.4px;
         border-radius: 4px;
         font-weight: 800;
         font-size: 14px;
         line-height: 19px;
         color: #FFFFFF;
         cursor: pointer;
         padding: 7px 13px;
         -webkit-box-shadow: 1px 11px 20px 0px rgba(233, 179, 14, 0.12);
         box-shadow: 1px 11px 20px 0px rgba(233, 179, 14, 0.12);
         text-transform: capitalize;
         }
         .btn:focus {
         outline: none;
         }
         .text-center {
         text-align: center
         }
         .template-width {
         width: 724px;
         }
         .success-img img {
         width: 40%;
         margin: 10px 0 10px;
         }
         .booking-table {
         width: 100%;
         border: 1px solid #dddddd;
         margin-top: 40px;
         }
         @media (max-width: 767px) {
         .template-width {
         width: 550px;
         }
         .booking-table .booking-td {
         width: 100% !important;
         display: block;
         }
         .booking-table tr .booking-td:first-child {
         border-right: none !important;
         }
         }
         @media (max-width: 576px) {
         .template-width {
         width: 420px;
         }
         .success-img h3 {
         width: 90% !important;
         }
         }
         @media (max-width: 480px) {
         .template-width {
         width: 300px;
         }
         }
      </style>
   </head>
   <body style="margin: 80px auto;">
      <table class="template-width" align="center" border="0" cellpadding="0" cellspacing="0"
         style="background-color: #fff;  box-shadow: 0px 0px 14px -4px rgba(0, 0, 0, 0.2705882353);">
         <tbody>
            <tr>
               <td style="padding: 10px 20px;">
                  <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                     <tbody>
                        <tr class="header">
                           <td align="left" valign="top">
                              <a href="https://gocabish.com" target="_blank">
                              <img src="https://www.gocabish.com/images/logo/final_iline_logo.png" style="width: 100px;" class="main-logo">
                              </a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td class="success-img" style="text-align: center;">
                  <img src="assets/images/booking-success.png">
                  <h2
                     style="margin: 0 auto; width: 90%;  font-size:calc(18px + (22 - 18) * ((100vw - 320px) / (1920 - 320)));">
                     Payment Successful ! Get Ready For Unforgettable Trip.
                  </h2>
                  <h3 style="width: 70%;margin: 5px auto 28px;line-height: 1.4;color: #9a9a9a;font-weight: 400;">Head
                     to
                     your
                     Itinerary to check into your flight, make updates, and share your
                     plans with
                     friends & family.
                  </h3>
                  <a href="#" class="btn">view itinerary</a>
               </td>
            </tr>
            <tr>
               <td style="padding: 0 20px;">
                  <table class="booking-table">
                     <tbody>
                        <tr>
                           <td class="booking-td" style="border-right: 1px solid #dddddd; width: 50%;">
                              <h5
                                 style="margin: 0 0 6px 0; font-size: 18px; border-bottom: 1px solid #dddddd; padding: 10px;">
                                 Booking Details
                              </h5>
                              <table style="padding-left: 10px; color: #616161; padding-bottom: 10px;
                                 padding-top: 5px;">
                                 <tbody style="font-size: 16px; line-height: 1.5;">
                                    <tr>
                                       <td>Booking No:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{$booking_id}}</td>
                                    </tr>
                                    <tr>
                                       <td>From:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{explode(",",$pick_location)[0]}}</td> 
                                    </tr>
                                    <tr>
                                       <td>To:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{explode(",",$drop_location)[0]}}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                           <td class="booking-td" style="width: 50%;">
                              <h5
                                 style="margin: 0 0 6px 0; font-size: 18px; border-bottom: 1px solid #dddddd; padding: 10px;">
                                 Tour Details
                              </h5>
                              <table style="padding-left: 10px; color: #616161; padding-bottom: 10px;
                                 padding-top: 5px;">
                                 <tbody style="font-size: 16px; line-height: 1.5;">
                                    <tr>
                                       <td>Trip Type:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{$code}}</td>
                                    </tr>
                                    <tr>
                                       <td>Travel Date:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{$date}}</td>
                                    </tr>
                                    <tr>
                                       <td>Return Date:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{ ($rdate)=="" ? "-" : $rdate }}</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td style="padding: 0 20px;">
                  <table class="booking-table">
                     <tbody>
                        <tr>
                           <td class="booking-td" style="border-right: 1px solid #dddddd; width: 50%;">
                              <h5
                                 style="margin: 0 0 6px 0; font-size: 18px; border-bottom: 1px solid #dddddd; padding: 10px;">
                                 Inclusion
                              </h5>
                              <table style="padding-left: 10px; color: #616161; padding-bottom: 10px;
                                 padding-top: 5px;">
                                 <tbody style="font-size: 16px; line-height: 1.5;">
                                    <tr>
                                       <td>
                                        {!! $inclusion !!}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                           <td class="booking-td" style="width: 50%;">
                              <h5
                                 style="margin: 0 0 6px 0; font-size: 18px; border-bottom: 1px solid #dddddd; padding: 10px;">
                                 Exclision
                              </h5>
                              <table style="padding-left: 10px; color: #616161; padding-bottom: 10px;
                                 padding-top: 5px;">
                                 <tbody style="font-size: 16px; line-height: 1.5;">
                                    <tr>
                                       <td>
                                            {!! $exclusion !!}
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <td style="padding: 0 20px;">
                  <table class="booking-table" style="    margin-bottom: 30px;">
                     <tbody>
                        <tr>
                           <td class="booking-td" style="border-right: 1px solid #dddddd; width: 50%;">
                              <h5
                                 style="margin: 0 0 6px 0; font-size: 18px; border-bottom: 1px solid #dddddd; padding: 10px;">
                                 Payment Status
                              </h5>
                              <table style="padding-left: 10px; color: #616161; padding-bottom: 10px;
                                 padding-top: 5px;">
                                 <tbody style="font-size: 16px; line-height: 1.5;">
                                    <tr>
                                       <td>Transaction Id:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{$txnid}}</td>
                                    </tr>
                                    <tr>
                                       <td>Payment Type:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{ ($type)==1 ? "fullpayment" : "partialpayment" }}</td>
                                    </tr>
                                    <tr>
                                       <td>Paid Amount:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">INR {{$final_amt}}</td>
                                    </tr>
                                    <tr>
                                       <td>Remaining Amount:</td>
                                       <td style="font-weight: 600; color: #3c3c3c;">{{ ($type)==1 ? "-" : $balance }}</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </td>
                           
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
         </tbody>
      </table>
   </body>
</html>