<!DOCTYPE html>
<html><head>
    <title></title>

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

       <header class="header-two">
		   <div class="container">
	   		<a href="/"><img class="logo2" src="{{URL::to('frontend/images/logo2.png')}}" alt=""></a>
			<a href="/"><img class="logo-dark" src="{{URL::to('frontend/images/logo-dark.png')}}" alt=""></a>

			<div class="cont-right">

            <nav class="menu-5 nav">
            	<ul class="wtf-menu">
                	<li class="select-item"><a href="#.">Home</a>
						<ul class="submenu">
							<li> <a href="index.html" class="select">Home 1</a> </li>
						</ul>
					</li>

					<li><a href="#.">Menu</a>
						<ul class="submenu">
							<li> <a href="menu.html">menu 1</a> </li>
							<li> <a href="menu2.html">menu 2</a> </li>
							<li> <a href="menu3.html">menu 3</a> </li>
						</ul>
					</li>

					<li><a href="our-story.html">our story</a></li>


					<li class="parent"><a href="#.">Blog</a>

					<ul class="submenu">
                        <li><a href="blog.html">blog 1</a></li>
						<li><a href="blog2.html">blog 2</a></li>
					</ul>

					</li>


					<li><a href="#.">contact us</a>

						<ul class="submenu">
							<li><a href="contact-us.html">contact-us 1</a></li>
							<li><a href="contact-us2.html">contact-us 2</a></li>
						</ul>

					</li>

					<li><a href="shop.html">online order</a></li>
                </ul>
            </nav>

			<ul class="social-icons">
				<li><a href="#."><i class="icon-facebook-1"></i></a></li>
				<li><a href="#."><i class="icon-twitter-1"></i></a></li>
				<li><a href="#."><i class="icon-google"></i></a></li>
			</ul>

			<ul class="shop-bag">
				<li class="close-bag"><a class="cart-button"><i class="icon-icons163"></i> <span class="num">2</span></a></li>
				<li class="open-bag">

					<div class="cart-food">
						<div class="detail">
							<img src="{{URL::to('/frontend/images/cart-food1.jpg')}}" alt="">
							<div class="text">
								<a href="#.">Blanched Garlic</a>
								<p>1 x $35.00</p>
							</div>
						</div>
						<a href="#." class="cross"><i class="icon-cancel2"></i></a>
					</div>

					<div class="sub-total">
						<span>SUBTOTAL: <strong>$115.00</strong></span>
						<div class="buttons">
							<a href="#." class="view-cart">view cart</a>
							<a href="#." class="check-out">Check Out</a>
						</div>
					</div>


				</li>
			</ul>

			<ul class="get-touch">
				<li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33 444</span></a></li>
			</ul>

			</div>
		</div>

       </header>


   <!--End Header-->




	<!-- Mobile Menu Start -->
	<div class="container">
    <div id="page">
			<header class="header">
				<a href="#menu"></a>

			</header>

			<nav id="menu">
				<ul>
					<li class="select"><a href="#.">Home</a>
                    	<ul>
							<li class="select"> <a href="index.html">Home Page 1</a> </li>
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
					<li><a href="#book-table">Book a Table</a></li>


				</ul>


			</nav>
		</div>
		</div>
    <!-- Mobile Menu End -->










	<!--Start Banner-->

   <div class="tp-banner-container">
		<div class="tp-banner" >
			<ul>
    	<!-- SLIDE  -->
				@foreach($sliders as $key=>$slider)
				<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">


						<img src="{{asset('uploads/slider/'.$slider->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



						<div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
							data-x="center"
							data-y="380"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="850"
							data-start="1500"
							data-easing="Power3.easeInOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="1000"
							style=""><img src="{{URL::to('frontend/images/slides/flower.png')}}" alt="" >
						</div>


						<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
							data-x="center"
							data-y="456"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="850"
							data-start="2500"
							data-easing="Power3.easeInOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="1000"
							style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">{{$slider->title}}
						</div>


						<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
							data-x="center"
							data-y="538"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="3500"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.05"
							data-endelementdelay="0.1"
							style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">{{$slider->sub_title}}</div>
						</div>

					</li>


{{--				<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

						<img src="{{URL::to('frontend/images/slides/banenr-img2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



						<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
							data-x="0"
							data-y="376"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="850"
							data-start="2500"
							data-easing="Power3.easeInOut"
							data-splitin="chars"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">quality food
						</div>


						<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
							data-x="0"
							data-y="468"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="3500"
							data-easing="Power3.easeInOut"
							data-splitin="chars"
							data-splitout="none"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">fine food & dining since 1880</div>
						</div>


						<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
							data-x="0"
							data-y="560"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="800"
							data-start="5900"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.05"
							data-endelementdelay="0.1"
							style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">
							<a href="our-story.html" class="read-more" style=" line-height: initial; color: #fff;  border:solid 2px #fff; text-transform: uppercase; font-weight: 500; letter-spacing: 0px; padding: 16px 36px; display: inline-block; font-size: 18px;">explore more</a>
							</div>
						</div>



					</li>


				<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

						<img src="{{URL::to('images/slides/banenr-img3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



						<div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
							data-x="center"
							data-y="330"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="850"
							data-start="1500"
							data-easing="Power3.easeInOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="1000"
							style=""><img src="{{URL::to('images/slides/flower.png')}}" alt="" >
						</div>


						<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
							data-x="center"
							data-y="406"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="850"
							data-start="2500"
							data-easing="Power3.easeInOut"
							data-elementdelay="0.1"
							data-endelementdelay="0.1"
							data-endspeed="1000"
							style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">real taste real food
						</div>


						<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
							data-x="center"
							data-y="498"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="500"
							data-start="3500"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.05"
							data-endelementdelay="0.1"
							style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">the passion for the perfect taste</div>
						</div>


						<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
							data-x="center"
							data-y="580"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="800"
							data-start="4200"
							data-easing="Power3.easeInOut"
							data-splitin="none"
							data-splitout="none"
							data-elementdelay="0.05"
							data-endelementdelay="0.1"
							style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left; ">
							<a href="shop.html" class="read-more" style=" line-height: initial; color: #fff; border:solid 2px #fff; text-transform: uppercase; font-weight: 500; letter-spacing: 0px; padding: 16px 36px; display: inline-block; font-size: 18px;">online order</a>
							</div>
						</div>


					</li>--}}
				@endforeach
			</ul>

<div class="tp-bannertimer"></div>	</div>
<div class="wave"></div>
</div>

   <!--End Banner-->



   <!--Start Content-->
   <div class="content">



		<!--Start Services-->
		<div class="services">
			<div class="container">

				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
					<span>Introduction</span>
					<h1>Our Services</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
					</div>
				</div>
				</div>

				<div class="row">

					<div class="col-md-4">
						<div class="serv-main-sec">
						<div class="service-sec-top-bg"></div>
						<div class="service-sec">
							<i class="icon-restaurant14"></i>
							<h6>Special Menu</h6>
							<p>in this theme we are included many more restaurant font icons.</p>
							<a href="menu3.html">read more</a>
						</div>
						<div class="service-sec-bottom-bg"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="serv-main-sec serv-main-sec2">
						<div class="service-sec-top-bg"></div>
						<div class="service-sec">
							<i class="icon-cups7"></i>
							<h6>Elegant interior</h6>
							<p>in this theme we are included many more restaurant font icons.</p>
							<a href="our-story.html">read more</a>
						</div>
						<div class="service-sec-bottom-bg"></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="serv-main-sec">
						<div class="service-sec-top-bg"></div>
						<div class="service-sec">
							<i class="icon-barbecue9"></i>
							<h6>Fresh & Hot Food</h6>
							<p>in this theme we are included many more restaurant font icons.</p>
							<a href="menu.html">read more</a>
						</div>
						<div class="service-sec-bottom-bg"></div>
						</div>
					</div>


				</div>

			</div>
		</div>
		<!--End Services-->




		<!--Start Master of Town-->
		<div class="master-town">

				<div class="parallax">
					<div class="detail">
						<h1><span>&ldquo;</span>Fresh and healthy master of town<span>&rdquo;</span></h1>
						<a href="#." class="white-btn">Buy Now</a>
					</div>
				</div>

		</div>
		<!--End Master of Town-->




		<!--Start Our Stiry-->
			<div class="our-story">
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<div class="story-detail">
							<div class="main-title">
								<span>Discover</span>
								<h1>our story</h1>
							</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
							<a href="our-story.html" class="full-story">view full story</a>
							</div>
						</div>

						<div class="col-md-6">
							<img src="{{URL::to('frontend/images/our-story.jpg')}}" alt="">
						</div>

					</div>
				</div>
			</div>
		<!--End Our Stiry-->




		<!--Start Upcoming Event-->
		<div class="upcoming-event">


				<div class="parallax parallax-event">

					<div class="detail">

						<div class="container">

						<div class="row">
						<div class="col-md-12">
							<div class="main-title-white">
							<span>Don’t Miss</span>
							<h1>UPCOMING EVENTS</h1>
							</div>
						</div>
						</div>


						<ul id="example">
							<li><span class="days">00</span><p class="days_text">Days</p></li>
							<li class="seperator">:</li>
							<li><span class="hours">00</span><p class="hours_text">Hours</p></li>
							<li class="seperator">:</li>
							<li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
							<li class="seperator">:</li>
							<li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
						</ul>

						<div class="event-detail">
							<div class="row">

								<div class="col-md-4">
									<img src="{{URL::to('frontend/images/event-img.jpg')}}" alt="">
								</div>

								<div class="col-md-8">
									<div class="event-text">
										<h6>How to Properly Use Spices</h6>
										<span><i class="icon-clock"></i> April 22, 2016 / 8:30 pm - 11:00 pm</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...  <a href="event-detail.html">Read More</a></p>
										<a href="events.html" class="view-event">view all events</a>
									</div>
								</div>

							</div>
						</div>

						</div>

					</div>

				</div>

		</div>
		<!--End Upcoming Event-->





		<!--Start Today Food-->
			<div class="today-food">
				<div class="container">
					<div class="row">

						<div class="col-md-6">
							<img src="{{URL::to('frontend/images/today-special.jpg')}}" alt="">
						</div>

						<div class="col-md-6">
							<div class="special-food">
							<div class="main-title">
								<span>Today’s</span>
								<h1>SPECIALS food</h1>
							</div>

							<div class="food-detail">
								<span class="title">Blue Cheese Crackers with Grapes <span class="price">$12</span></span>
								<span class="tags">Chicken   /   Grapes   /   Pizza   /   Cheese   /   Herbs</span>
							</div>

							</div>
						</div>


					</div>
				</div>
			</div>
		<!--End Today Food-->





		<!--Start Book Table-->
		<div id="book-table"></div>
		<div class="height35"></div>
		<div class="book-table">

				<div class="parallax parallax-book-table">
					<div class="detail">
						<div class="container">
							<div class="row">

								<div class="col-md-8">

									<div class="main-title">
										<span>Book a Table</span>
										<h1>Reservation</h1>
									</div>


									<div class="booking-form">
										<p class="error" id="reserv_error" style="display:none;"></p>
										<p class="success" id="reserv_success_msg" style="display:none;">Thank You! We will contact you shortly.</p>

										<form name="reserv_form" id="reserv_form" method="post" action="{{route('reservation.reserve')}}" >
											{{csrf_field()}}
											<div class="col-md-6"><div class="field"><input name="name" id="reserv_name" type="text" value="Your Name" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" ></div></div>

											<div class="col-md-6"><div class="field">
											<input type="text" id="datepicker"  placeholder="Appointment Date" onClick="" name="date" value="Choose A Date" onblur="if(this.value == '') { this.value='Choose A Date'}" onfocus="if (this.value == 'Choose A Date') {this.value=''}"/>
											</div></div>

											<div class="col-md-6"><div class="field basic-example2">
												<select class="basic-example" id="reserv_time" name="time">
													<option value="">Choose A Time</option>
													<option value="9:00am to 12:00pm">9:00am to 12:00pm</option>
													<option value="12:00pm to 3:00pm">12:00pm to 3:00pm</option>
													<option value="3:00pm to 6:00pm">3:00pm to 6:00pm</option>
													<option value="6:00pm to 9:00pm">6:00pm to 9:00pm</option>
													<option value="9:00pm to 12:00am">9:00pm to 12:00am</option>
												</select>
											</div></div>
											<div class="col-md-6"><div class="field">
												<select class="basic-example" name="person" id="reserv_persons">
													<option value="">Persons</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5+</option>
												</select>
											</div></div>
											<div class="col-md-6"><div class="field"><input name="email" id="reserv_email" type="text" value="Email Address" onblur="if(this.value == '') { this.value='Email Address'}" onfocus="if (this.value == 'Email Address') {this.value=''}"></div></div>
											<div class="col-md-6"><div class="field"><input name="phone_number" id="reserv_phone" type="text" value="Phone No" onblur="if(this.value == '') { this.value='Phone No'}" onfocus="if (this.value == 'Phone No') {this.value=''}"></div></div>

											<input name=" " type="submit" value="Book a table" onClick="validateReservation();">
										</form>

									</div>



								</div>

							</div>
						</div>
					</div>
				</div>

		</div>
		<!--End Book Table-->





		<!--Start Latest News-->
   <div class="latest-news">
   		<div class="container">

            <div class="row">
	        <div class="col-md-12">

                <div class="main-title">
					<span>Latest Posts</span>
					<h1>From the Blog</h1>
				</div>

            </div>
            </div>




            <div id="latest-news">
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">

                <div class="post item">
                    	<img class="lazyOwl" src="{{URL::to('frontend/images/news-img1.jpg')}}" alt="">
                        <div class="detail">
                        	<img src="{{URL::to('frontend/images/news-cheff1.jpg')}}" alt="">
                            <h5><a href="blog-detail.html">Spicy Food</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                            <span><i class="icon-clock"></i> Apr 22, 2016</span>
                            <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 5 Comments</a></span>
                        </div>
                    </div>
                <div class="post item">
                    <img class="lazyOwl" src="{{URL::to('frontend/images/news-img2.jpg')}}" alt="">
                    <div class="detail">
                        <img src="{{URL::to('frontend/images/news-cheff2.jpg')}}" alt="">
                        <h5><a href="blog-detail.html">Hot Cake</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                        <span><i class="icon-clock"></i> Apr 09, 2016</span>
                        <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 3 Comments</a></span>
                    </div>
                </div>

                <div class="post item">
                    <img class="lazyOwl" src="{{URL::to('frontend/images/news-img3.jpg')}}" alt="">
                    <div class="detail">
                        <img src="{{URL::to('frontend/images/news-cheff3.jpg')}}" alt="">
                        <h5><a href="blog-detail.html">Fresh Salad</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                        <span><i class="icon-clock"></i> Mar 28, 2016</span>
                        <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                    </div>
                </div>

                <div class="post item">
                    <img class="lazyOwl" src="{{URL::to('frontend/images/news-img4.jpg')}}" alt="">
                    <div class="detail">
                        <img src="{{URL::to('frontend/images/news-cheff2.jpg')}}" alt="">
                        <h5><a href="blog-detail.html">Couple Area</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                        <span><i class="icon-clock"></i> Mar 15, 2016</span>
                        <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 0 Comments</a></span>
                    </div>
                </div>

                <div class="post item">
                    <img class="lazyOwl" src="{{URL::to('frontend/images/news-img5.jpg')}}" alt="">
                    <div class="detail">
                        <img src="images/news-cheff1.jpg" alt="">
                        <h5><a href="blog-detail.html">Hand Picked Ingredients</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit eros...</p>
                        <span><i class="icon-clock"></i> Mar 04, 2016</span>
                        <span class="comment"><a href="blog-detail.html"><i class="icon-icons206"></i> 11 Comments</a></span>
                    </div>
                </div>

              </div>

            </div>
          </div>
        </div>

    </div>



        </div>
   </div>
   <!--End Latest News-->






	<!--Start Customer Words-->
		<div class="customer-words">

				<div class="parallax parallax-customer-words">
					<div class="detail">

						<div class="main-title-white">
							<span>Some Words</span>
							<h1>FROM CUSTOMERS</h1>
						</div>

						<div id="testimonials">
							<div class="container">
								<div class="row">

									<div class="col-md-12">
									<div class="span12">

										<div id="owl-demo2" class="owl-carousel">

										<div class="testi-sec">
										<img src="{{URL::to('frontend/images/testimonial-img1.jpg')}}" alt="">
										<div class="height35"></div>
										<span class="name">Christian Stewart</span>
										<span class="work">Fashion Designer</span>
										<div class="height20"></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
										<div class="height20"></div>
										<div class="rating">
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
										</div>
										</div>

										<div class="testi-sec">
										<img src="{{URL::to('frontend/images/testimonial-img2.jpg')}}" alt="">
										<div class="height35"></div>
										<span class="name">johny Bravo</span>
										<span class="work">TV Actor</span>
										<div class="height20"></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. </p>
										<div class="height20"></div>
										<div class="rating">
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
										</div>
										</div>

										<div class="testi-sec">
										<img src="{{URL::to('frontend/images/testimonial-img3.jpg')}}" alt="">
										<div class="height35"></div>
										<span class="name">Rubica noi</span>
										<span class="work">Founder Photography</span>
										<div class="height20"></div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan.</p>
										<div class="height20"></div>
										<div class="rating">
											<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
										</div>
										</div>


										</div>

									</div>
									</div>

								</div>
							</div>
						</div>

					</div>
				</div>

		</div>
		<!--End Customer Words-->



	 </div>
   <!--End Content-->












   @include('includes.footer')


</body>
</html>
