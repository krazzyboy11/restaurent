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
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img1.jpg')}}" alt=""></a></div>
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img2.jpg')}}" alt=""></a></div>
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img3.jpg')}}" alt=""></a></div>
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img4.jpg')}}" alt=""></a></div>
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img5.jpg')}}" alt=""></a></div>
                            <div class="col-md-4"><a href="#."><img src="{{URL::to('frontend/images/instagram-img6.jpg')}}" alt=""></a></div>
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








<a href="#0" class="cd-top"></a>
</div>

<script type="text/javascript" src="{{asset('frontend/js/jquery.js')}}"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="{{asset('frontend/js/scroll-desktop.js')}}"></script>
<script type="text/javascript" src="{{('frontend/js/scroll-desktop-smooth.js')}}"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.themepunch.tools.min.js')}}"></script>

<!-- Paralllax background -->
<script type="text/javascript" src="{{asset('frontend/js/parallax.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript" src="{{asset('frontend/js/countdown.js')}}"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/cart-detail.js')}}"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.mmenu.min.all.js')}}"></script>

<!-- Form Drop Dow -->
<script type="text/javascript" src="{{asset('frontend/js/form-dropdown.js')}}"></script>

<!-- Date Picker and input hover -->
<script type="text/javascript" src="{{asset('frontend/js/classie.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-ui-1.10.3.custom.js')}}"></script>


<!-- All Scripts -->
<script type="text/javascript" src="{{asset('frontend/js/custom.js')}}"></script>




<!-- Date Picker -->
<script type="text/javascript">
    [].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
// in case the input is already filled..

// events:
        inputEl.addEventListener( 'focus', onInputFocus );
        inputEl.addEventListener( 'blur', onInputBlur );
    } );

    function onInputFocus( ev ) {
        classie.add( ev.target.parentNode, 'input--filled' );
    }

    function onInputBlur( ev ) {
        if( ev.target.value.trim() === '' ) {
            classie.remove( ev.target.parentNode, 'input--filled' );
        }
    }

    //date picker
    jQuery("#datepicker").datepicker({
        inline: true
    });

    <!-- Form Drop Down -->
    $(document).ready(function() {

        $(".basic-example").heapbox();

    });

</script>


<!-- Revolution Slider -->
<script type="text/javascript">
    jQuery('.tp-banner').show().revolution(
        {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:900,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,

            navigationType:"nexttobullets",
            navigationArrows:"solo",
            navigationStyle:"preview",

            touchenabled:"on",
            onHoverStop:"on",

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner4",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",



            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            videoJsPath:"rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });
</script>
<!-- Gallery Portfolio -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.cubeportfolio.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>


<!-- All Scripts -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


<!-- Notification Bar -->
<script>
    $('.notify--dismissible').append('<button type="button" class="notify-close">&times;</button>');

    $('.notify-close').on('click',function(){
        $(this).closest('.notify').hide();
    });
</script>