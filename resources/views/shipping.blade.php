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
                                <a href="shop-cart.html">
                                    <span class="number">1</span>
                                    <div class="clear"></div>
                                    <span class="text">Shop Cart Detail</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a href="customer-info.html">
                                    <span class="number">2</span>
                                    <div class="clear"></div>
                                    <span class="text">Customer information</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a class="selected">
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



                <!--Start Shipping Address-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="cash-delivery">
                            <div class="cash-delivery-detail">
                                <h5>Shipping address</h5>
                                <div class="shipping-address">
                                    @if(Session::has('customer_info'))
                                    <div class="shipping-detail">
                                        <div class="adres"><span class="bold">Your Name:</span> <span>{{Session::get('customer_info')['customer_first_name']}} {{Session::get('customer_info')['customer_last_name']}}</span></div>
                                        <div class="adres"><span class="bold">Email Address:</span> <span>{{Session::get('customer_info')['customer_email_address']}}</span></div>
                                        <div class="adres"><span class="bold">Shipping Address:</span> <span>{{Session::get('customer_info')['customer_address']}}</span></div>
                                        <div class="adres"><span class="bold">City:</span> <span>{{Session::get('customer_info')['customer_city']}}</span></div>
                                        <div class="adres"><span class="bold">Zip Code:</span> <span>{{Session::get('customer_info')['customer_postal_code']}}</span></div>
                                        <div class="adres"><span class="bold">Phone no:</span> <span>{{Session::get('customer_info')['customer_phone_no']}}</span></div>
                                        <a class="edit-address" href="/checkout">Edit shipping address</a>
                                    </div>

                                    @endif

                                    <div class="shipping-method">
                                        <h6>Shipping method</h6>
                                        <div class="shipping-across">
                                            <span class="dot"></span> <span class="across">Free Shipping </span> <span class="free">Free</span>
                                        </div>
                                    </div>



                                    <a href="/orderInfo" class="next-step">Continue to payment method</a>




                                </div>
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