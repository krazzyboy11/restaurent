<header class="header-two">
    <div class="container">
        <a href="index.html"><img class="logo2" src="images/logo2.png" alt=""></a>
        <a href="index.html"><img class="logo-dark" src="images/logo-dark.png" alt=""></a>

        <div class="cont-right">

            <nav class="menu-5 nav">
                <ul class="wtf-menu">
                    <li><a href="/">Home</a>
                    </li>

                    <li><a href="our-story.html">our story</a></li>


                    <li class="parent"><a href="#.">Blog</a>
                    </li>


                    <li><a href="#.">contact us</a>
                    </li>

                    <li class="select-item"><a href="/menu">online order</a></li>
                </ul>
            </nav>

            <ul class="social-icons">
                <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                <li><a href="#."><i class="icon-google"></i></a></li>
            </ul>

            <ul class="shop-bag">
                @if(Session::has('cart'))
                <li class="close-bag"><a class="cart-button"><i class="icon-icons163"></i>
                        <span class="num">{{--{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}--}}
                        {{Session::get('cart')->totalQty}}</span></a></li>
                    <li class="open-bag">
                        @foreach(Session::get('cart')->items as $item)
                    <div class="cart-food">
                        <div class="detail">
                            <img src="{{asset('uploads/item/'.$item['item']['image'])}}" alt="">
                            <div class="text">
                                <a href="#.">{{$item['item']['name']}}</a>
                                <p>{{$item['qty']}} x ${{$item['item']['price']}}</p>
                            </div>
                        </div>
                        <a href="#." class="cross"><i class="icon-cancel2"></i></a>
                    </div>
                        @endforeach
                   {{--<div class="cart-food">
                        <div class="detail">
                            <img src="images/cart-food2.jpg" alt="">
                            <div class="text">
                                <a href="#.">GREEN CHILE </a>
                                <p>2 x $40.00</p>
                            </div>
                        </div>
                        <a href="#." class="cross"><i class="icon-cancel2"></i></a>
                    </div>--}}

                    <div class="sub-total">
                        <span>SUBTOTAL: <strong>${{Session::get('cart')->totalPrice}}</strong></span>
                        <div class="buttons">
                            <a href="{{route('cart.item')}}" class="view-cart">view cart</a>
                            <a href="#." class="check-out">Check Out</a>
                        </div>
                    </div>
                    @endif
                </li>
            </ul>

            <ul class="get-touch">
                <li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33 444</span></a></li>
            </ul>

        </div>
    </div>

</header>


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

                <li class="select"><a href="shop.html">Order Online</a></li>
                <li><a href="index.html#book-table">Book a Table</a></li>


            </ul>


        </nav>
    </div>
</div>
<!-- Mobile Menu End -->