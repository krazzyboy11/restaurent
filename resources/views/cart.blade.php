<!DOCTYPE html>
<html><head>
    <title>Welcome to Pearl</title>

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    @include('includes.head')


</head>
<body>



<div id="wrap">

    <!--Start PreLoader-->
    {{--<div id="preloader">
        <div id="status">&nbsp;</div>
        <div class="loader">
            <h1>Loading...</h1>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>--}}
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

        <!--Start Shop Cart-->
        <div class="shop-cart">
            <div class="container">
                <div class="cart-products">
                    <div class="row">
                        <div class="col-md-12">
                            @if(Session::has('cart'))
                            <div class="titles">
                                <div class="pro"><span>Product</span></div>
                                <div class="price"><span>Price</span></div>
                                <div class="quantity"><span>Quantity</span></div>
                                <div class="total"><span>Total</span></div>
                            </div>
                                @foreach($products as $product)
                            <div class="cart-pro-detail">

                                <div class="food-pro">
                                    <img src="{{asset('uploads/item/'.$product['item']['image'])}}" alt="">
                                    <span>{{$product['item']['name']}}</span>
                                </div>

                                <div class="price">
                                    <span>{{$product['price']}}</span>
                                </div>

                                <div class="quantity">
                                    <input name=" " type="text" value="{{$product['qty']}}">
                                </div>

                                <div class="total">
                                    <span>{{$product['price']}}</span>
                                </div>

                                <div class="cancel">
                                    <a href=#.><i class="icon-cancel"></i></a>
                                </div>

                            </div>

          {{--                  <div class="cart-pro-detail">

                                <div class="food-pro">
                                    <img src="images/menu/dish-img2.jpg" alt="">
                                    <span>Spicy Blanched Garlic</span>
                                </div>

                                <div class="price">
                                    <span>£35.00</span>
                                </div>

                                <div class="quantity">
                                    <input name=" " type="text" value="1">
                                </div>

                                <div class="total">
                                    <span>£35.00</span>
                                </div>

                                <div class="cancel">
                                    <a href=#.><i class="icon-cancel"></i></a>
                                </div> --}}


                            </div>
                        @endforeach




                            <div class="cart-update-sec">

                                <div class="apply-coupon">
                                    <input name=" " type="text" onblur="if(this.value == '') { this.value='Enter Coupon Code'}" onfocus="if (this.value == 'Enter Coupon Code') {this.value=''}" value="Enter Coupon Code">
                                    <a href="#.">apply coupon</a>
                                </div>

                                <a href="#." class="update-cart">update cart</a>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="cash-decide">
                    <div class="row">

                        <div class="col-md-5">
                            <div class="cart-total">
                                <h5>Cart Totals</h5>
                                <div class="total-sec">
                                    <div class="sub-total-sec"> <span class="left">Cart Subtotal</span> <span class="right">{{$totalPrice}}</span> </div>
                                    <div class="sub-total-sec"> <span class="left">Shipping</span> <span class="right">Free Shipping</span> </div>
                                    <div class="order-total"> <span class="left">Order Total</span> <span class="right">£{{$totalPrice}}</span> </div>
                                    <a href="{{route('product.checkout')}}">proceed to checkout</a>
                                </div>

                            </div>
                        </div>
                        @endif

                        <div class="col-md-2">
                            <div class="or"><h5>or</h5></div>
                        </div>

                        <div class="col-md-5">
                            <div class="on-delivery"><a href="{{route('product.checkout')}}">cash on delivery</a></div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
        <!--End Shop Cart-->

    </div>
    <!--End Content-->






