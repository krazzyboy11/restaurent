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



    <!-- Mobile Menu Start -->

    <!-- Mobile Menu End -->



    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>shipping method</h1>
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
                                <a href="payment-method.html">
                                    <span class="number">2</span>
                                    <div class="clear"></div>
                                    <span class="text">Customer information</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a href="shipping-method.html">
                                    <span class="number">3</span>
                                    <div class="clear"></div>
                                    <span class="text">Shipping Method</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a class="selected">
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
                                <h5>Payment method</h5>
                                <p>All transactions are secure and encrypted. Credit card information is never stored.</p>

                                <div class="shipping-address payment-method">


                                    <div class="shipping-method">
                                        <div class="shipping-across">
                                            <span class="across">Cash on Delivery (COD)</span>
                                        </div>
                                    </div>

                                    <div class="shipping-method">
                                        <h6>Billing address</h6>
                                        <div class="shipping-across">
                                            <span class="dot"></span> <span class="across">Same as shipping address</span>
                                        </div>
                                    </div>

                                    {{--<div class="checkout">
                                        <input type="checkbox" name="checkboxG3" id="checkboxG3" class="css-checkbox">
                                        <label for="checkboxG3" class="css-label">Subscribe to our newsletter</label>
                                    </div>--}}

                                    <a href="{{route('product.orderComplete')}}" class="next-step">Complete order</a>



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