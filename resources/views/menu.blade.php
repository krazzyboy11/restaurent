<!DOCTYPE html>
<html><head>
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
    @include('includes.header')
    <!--Start Header-->




    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>shop</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a class="select">Shop</a></li>
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

        <!--Start Shop-->
        <div class="shop">

            <!--Start Foods-->
            <div class="cbp-panel" style="max-width:1170px;">

                <div id="filters-container" class="cbp-l-filters-list ">
                    <div data-filter="*" class="cbp-item cbp-filter-item">ALL PRODUCTS</div>
                    @foreach($categories as $category)
                    <div data-filter="#{{$category->slug}}" class="cbp-filter-item">{{$category->name}} <span class="badge">
                            {{$category->items->count()}}
                        </span></div>
                    @endforeach
                    {{--<div data-filter=".starters" class="cbp-filter-item">STARTERS</div>
                    <div data-filter=".mains" class="cbp-filter-item">MAINS</div>
                    <div data-filter=".salads" class="cbp-filter-item cbp-l-filters-list-last">SALADS</div>--}}
                </div>

                <div id="grid-container" class="cbp shop-gallery">

                    @foreach($items as $item)
                    <div class=" cbp-item" id="{{$item->category->slug}}">
                        <a href="shop-detail.html">
                            <img src="{{asset('uploads/item/'.$item->image)}}" alt="">
                            <div class="detail">
                                <h6>{{$item->name}}</h6>
                                <span>{{$item->category->name}}</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">${{$item->price}}</span></a>
                                    <a href="{{route('product.addToCart',$item->id)}}"><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>
                    @endforeach

{{--
                    <div class="cbp-item mains salads">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img2.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$32.00</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item mains ">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img3.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$42.05</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item mains">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img4.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$12.25</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item mains salads">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img5.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$12.25</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item starters">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img6.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$12.25</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item starters">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img7.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$12.25</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>


                    <div class="cbp-item salads">

                        <a href="shop-detail.html">
                            <img src="images/menu/dish-img8.jpg" alt="">
                            <div class="detail">
                                <h6>Spicy Blanched Garlic</h6>
                                <span>Fresh<span class="dot">.</span> light<span class="dot">.</span> Mexican</span>

                                <div class="price-cart">
                                    <a href="#."><span class="price">$12.25</span></a>
                                    <a href="#."><span class="cart">add to cart</span></a>
                                </div>

                            </div>
                        </a>

                    </div>--}}


                </div>

            </div>
            <!--End Foods-->

        </div>
        <!--End Shop-->

    </div>
    <!--End Content-->



   @include('includes.footer')



</body>
</html>