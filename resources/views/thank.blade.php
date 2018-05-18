<!DOCTYPE html>
<html><head>
    <title>Thank you</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


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




    <!-- Mobile Menu Start -->
    <div class="container">
        <div id="page">
            <header class="header">
                <a href="#menu"></a>

            </header>

            <nav id="menu">
                <ul>
                    <li><a href="#.">Home</a>
                        <ul>
                            <li> <a href="index.html">Home Page 1</a> </li>
                            <li> <a href="index2.html">Home Page 2</a> </li>
                        </ul>
                    </li>
                    <li><a href="#.">Fresh Menu</a>
                        <ul>
                            <li> <a href="menu.html">Menu 1</a> </li>
                            <li> <a href="menu2.html">Menu 2</a> </li>
                            <li> <a href="menu3.html">Menu 3</a> </li>
                        </ul>
                    </li>

                    <li><a href="our-story.html">Our Story</a></li>


                    <li><a href="#.">Blog</a>
                        <ul>
                            <li> <a href="blog.html">Blog 1</a> </li>
                            <li> <a href="blog2.html">Blog 2</a> </li>
                        </ul>
                    </li>

                    <li><a href="#.">Contact Us</a>
                        <ul>
                            <li> <a href="contact-us.html">Contact-us 1</a> </li>
                            <li> <a href="contact-us2.html">Contact-us 2</a> </li>
                        </ul>
                    </li>

                    <li><a href="shop.html">Order Online</a></li>
                    <li><a href="index.html#book-table">Book a Table</a></li>


                </ul>


            </nav>
        </div>
    </div>
    <!-- Mobile Menu End -->



    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>thank you</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a class="select">Thank You Message</a></li>
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






                <!--Start Shipping Address-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="cash-delivery thanks-message">
                            <div class="cash-delivery-detail">
                                <i class="icon-checkmark3"></i>

                                <h5>Thank you for your Shopping!</h5>
                                <span class="order-num">Order 39036</span>
{{--
                                <p>A confirmation email has been sent to johnsmith@gmail.com</p>
--}}

                                <p class="delivered-text">Your order would be delivered via Delivery Boy at your mentioned address. The Delivery  	 	 	 							Boy who delivers the package collects the invoice value at the time of delivery. Delivery takes between 1/2 to 2  	 								Hours.</p>

                                {{--<div class="delivered-detail">

                                    <div class="delivered-sec">
                                        <span class="title">Shipping Address</span>
                                        <ul>
                                            <li><span>john smith</span></li>
                                            <li><span>johnsmith@gmail.com</span></li>
                                            <li><span>Street Name 123 123 45 USA</span></li>
                                            <li><span>New York</span></li>
                                            <li><span>54000</span></li>
                                            <li><span>+123 55 33 444 888</span></li>
                                        </ul>
                                    </div>

                                    <div class="delivered-sec right">
                                        <span class="title">Billing Address</span>
                                        <ul>
                                            <li><span>john smith</span></li>
                                            <li><span>johnsmith@gmail.com</span></li>
                                            <li><span>Street Name 123 123 45 USA</span></li>
                                            <li><span>New York</span></li>
                                            <li><span>54000</span></li>
                                            <li><span>+123 55 33 444 888</span></li>
                                        </ul>
                                    </div>

                                    <div class="delivered-sec">
                                        <span class="title">Shipping Method</span>
                                        <p>Free Shipping Across America</p>
                                    </div>

                                    <div class="delivered-sec right">
                                        <span class="title">Shipping Method</span>
                                        <img class="card" src="images/cod-card.jpg" alt=""><p>Cash on Delivery (COD) - $145.00</p>
                                    </div>


                                </div>--}}

                                <div class="clear"></div>
                                <a class="return-stor" href="/menu">return to store</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!--End Shipping Address-->





            </div>
        </div>
        <!--End Cash Billing-->

    </div>
    <!--End Content-->







    <!--Start Footer-->
    @include('includes.footer')
    <!--End Footer-->


</body>
</html>