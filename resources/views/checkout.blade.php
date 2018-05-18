<!DOCTYPE html>
<html><head>
    <title>Welcome to Pearl</title>

 @include('includes.head')

</head>
<body>



<div id="wrap">

    <!--Start PreLoader-->
    <div id="preloader">
        <div id="status">&nbsp;</div>
        <div class="loader">
            <h1>Loading...</h1>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--End PreLoader-->


    <!--Start Header-->
    @include('includes.header')

    <!--End Header-->


    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>order now</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a class="select">Order Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>
    <div class="wave"></div>

    <!--End Sub Banner-->





    <!--Start Content-->
    <div class="content">

        <!--Start Cash Billing-->


        <div class="cash-payment">
            <div class="container">


                <!--Start Bread Crumb-->

                <div class="bread-crumb">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="bread-crumb-sec">
                                <a href="/cart">
                                    <span class="number">1</span>
                                    <div class="clear"></div>
                                    <span class="text">Shop Cart Detail</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a class="selected">
                                    <span class="number">2</span>
                                    <div class="clear"></div>
                                    <span class="text">Customer information</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">3</span>
                                    <div class="clear"></div>
                                    <span class="text">Shipping Method</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">4</span>
                                    <div class="clear"></div>
                                    <span class="text">Payment Method</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--End Bread Crumb-->



                <!--Start Bread Crumb-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="cash-delivery">
                            <div class="cash-delivery-detail">
                                <h5>Customer information</h5>
                                <div class="form">

                                    <form method="post" action="{{route('product.checkoutInfo')}}">
                                        {{csrf_field()}}
                                    <input name="customer_first_name" type="text" onblur="if(this.value == '') { this.value='First Name'}" onfocus="if (this.value == 'First Name') {this.value=''}" value="First Name">
                                    <input class="right" name="customer_last_name" type="text" onblur="if(this.value == '') { this.value='Last Name'}" onfocus="if (this.value == 'Last Name') {this.value=''}" value="Last Name">
                                    <input name="customer_email_address" type="text" onblur="if(this.value == '') { this.value='Email Address'}" onfocus="if (this.value == 'Email Address') {this.value=''}" value="Email Address">
                                    <input class="right" name="customer_phone_no" type="text" onblur="if(this.value == '') { this.value='Phone No'}" onfocus="if (this.value == 'Phone No') {this.value=''}" value="Phone No">
                                    <input class="full-input" name="customer_address" type="text" onblur="if(this.value == '') { this.value='Address'}" onfocus="if (this.value == 'Address') {this.value=''}" value="Address">
                                    <input name="customer_city" type="text" onblur="if(this.value == '') { this.value='City'}" onfocus="if (this.value == 'City') {this.value=''}" value="City">
                                    <input class="right" name="customer_postal_code" type="text" onblur="if(this.value == '') { this.value='Postal Code'}" onfocus="if (this.value == 'Postal Code') {this.value=''}" value="Postal Code">

                                    {{--<div class="checkout">
                                        <input type="checkbox" name="checkboxG3" id="checkboxG3" class="css-checkbox" />
                                        <label for="checkboxG3" class="css-label">Save this information for faster checkout next time</label>
                                    </div>--}}

                                    <input  type="submit" class="next-step" value="Continue to shipping method">

                                    </form>

                                </div>

                              {{--  <div class="already-account">
                                    <span>Already have an account with us? <a href="#.">Login</a></span>
                                </div>--}}

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!--End Cash Billing-->

    </div>
    <!--End Content-->







    <!--Start Footer-->
    <footer class="footer">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="main-title">
                        <span>Short Info</span>
                        <h1>Get in touch</h1>
                    </div>
                </div>
            </div>

            <div class="get-touch">
                <div class="row">

                    <div class="col-md-4">
                        <div class="contact-us">
                            <h4>Contact Us</h4>
                            <div class="detail">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Aenean ac.</p>
                                <ul>
                                    <li class="phone"><i class="icon-telephone"></i> <span>+123 55 33 444 888</span></li>
                                    <li class="email"><i class="icon-email-1"></i> <span>Help@pearl.com</span></li>
                                    <li class="location"><i class="icon-home"></i> <span>329 Queensberry Street, North Me bourne, Australia.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="open-hours">
                            <h4>Opening Hour</h4>
                            <div class="detail">
                                <ul>
                                    <li><span class="day">Monday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Tuesday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Wednesday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Thursday</span> <span class="time">09 am - 10 pm</span></li>
                                    <li><span class="day">Friday</span> <span class="time">11 am - 08 pm</span></li>
                                    <li><span class="day">Saturday</span> <span class="time">10 am - 11 pm</span></li>
                                    <li><span class="day">Sunday</span> <span class="time">Closed</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="instagram">
                            <h4>Instagram</h4>
                            <div class="detail">
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img1.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img2.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img3.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img4.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img5.jpg" alt=""></a></div>
                                <div class="col-md-4"><a href="#."><img src="images/instagram-img6.jpg" alt=""></a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <div class="about-pearl">

                <div class="row">

                    <div class="col-md-12">
                        <div class="about-detail">
                            <h5>About Pearl</h5>
                            <p>PEARL is an Lorem ipsum porta placerat rutrum aliquet platea accumsan, molestie eros aliquet adipiscing egestas ultrices, leo convallis dolor nisl integer potenti fringilla aenean condimentum ipsum maecenas aliquet consectetur.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="follow-us">
                            <h5>Follow Along</h5>
                            <ul>
                                <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                                <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                                <li><a href="#."><i class="icon-google"></i></a></li>
                                <li><a href="#."><i class="icon-pinterest-p"></i></a></li>
                                <li><a href="#."><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="newsletter">
                            <h5>Newsletter</h5>

                            <div class="field">
                                <p id="nws_success_msg" class="success_msg" style="display:none">Thank You for subscribing.</p>
                                <form name="newsletter_form" id="newsletter_form" method="post" onSubmit="return false">
                                    <input name="nws_email_address" id="nws_email_address" type="text" onKeyPress="remove_newsletter_errors();" onblur="if(this.value == '') { this.value='Enter your e-mail address'}" onfocus="if (this.value == 'Enter your e-mail address') {this.value=''}" value="Enter your e-mail address">
                                    <a href="#." onClick="validateNewsletter();"><i class="icon-icons208"></i></a>
                                </form>
                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>



        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span>Copyright © 2016 Pearl Hotel. All rights reserved. by <a href="#.">Brighthemes</a></span>
                        <ul>
                            <li><a href="#.">Permissions and Copyrights</a></li>
                            <li><span class="divid">-</span></li>
                            <li><a href="#.">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <!--End Footer-->
@include('includes.footer');