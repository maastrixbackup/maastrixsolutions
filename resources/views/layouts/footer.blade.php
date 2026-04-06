<?php
// echo "<pre>";
// print_r($contact_details);exit;
$carr = [];
foreach ($contact_details as $value) {
    $addr = $value->address;
    $phone = $value->phone;
    $email = $value->email;
    $web = $value->website;
    array_push($carr, $addr, $phone, $email, $web);
}
?>

<!--=========================== Footer ===========================-->

<div class="software-roll">
    <div class="owl-carousel owl-theme" id="owl-carousel1">
        @foreach ($footr_scrl_img as $scrl_img)
            <div class="item"><img src="{{ url('Footer_Scroll_Images/' . $scrl_img->scroll_image) }}" alt="">
            </div>
        @endforeach

        <!--         <div class="item"><img src="images/software-thumb2.jpg" alt=""></div>
        <div class="item"><img src="images/software-thumb3.jpg" alt=""></div>
        <div class="item"><img src="images/software-thumb4.jpg" alt=""></div>
        <div class="item"><img src="images/software-thumb5.jpg" alt=""></div>
        <div class="item"><img src="images/software-thumb6.jpg" alt=""></div> -->
    </div>
</div>


<footer class="footer-style1">
    <div class="container">
        <div class="row">
            <div class="col-12 border-color-light-white">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5 text-white mb-1">Location</h4>
                                <p class="mb-0 text-white opacity8 small"><?php echo $carr[0]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-phone-office"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5 text-white mb-1">Phone</h4>
                                <p class="mb-0 text-white opacity8 small"><?php echo $carr[1]; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5 text-white mb-1">Email</h4>
                                <p class="mb-0 text-white opacity8 small"><a href="mailto:info@maastrixsolutions.com">
                                        <?php echo $carr[2]; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <i class="fas fa-globe"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h4 class="h5 text-white mb-1">Web</h4>
                                <p class="mb-0 text-white opacity8 small"><a href="https://www.maastrixsolutions.com/">
                                        <?php echo $carr[3]; ?></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert"
                style="width: 700px; height: 53px; text-align: center;">
                <strong>{{ session('success') }}</strong>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">

            <div class="col-lg-4 footer-logo ">
                <!-- <img src="images/logo.png" alt=""> -->
                <h3>About Us</h3>
                <p>We are a highly effective, learning and fast growing organization. Up till now, our customers have
                    their base in the USA, UK, Canada, Norway, Australia and India.</p>
                <div class="social-icons2 mb-3">
                    @foreach ($social_media as $social)
                        <ul class="ps-0 mb-0">
                            <li><a href="{{ $social->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $social->twitter }}"><i class="fab fa-twitter"></i></a></li>
                            <!-- <li><a href="#!"><i class="fab fa-instagram"></i></a></li> -->
                            <li><a href="{{ $social->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    @endforeach

                </div>


            </div>
            <div class="col-lg-8">
                <div class="row">
                    <!-- <div class="col-12 border-color-light-white">
                            <div class="row">
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-phone-office"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white mb-1">Phone</h4>
                                            <p class="mb-0 text-white opacity8 small">+91-674-2540245 / 2567340</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white mb-1">Email</h4>
                                            <p class="mb-0 text-white opacity8 small">info@maastrixsolutions.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <i class="fas fa-map-marked-alt"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h4 class="h5 text-white mb-1">Location</h4>
                                            <p class="mb-0 text-white opacity8 small">MBM Silver, Plot L3/60, 3rd Floor<br>AcharyaVihar, Bhubaneswar</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <div class="col-sm-6 col-lg-3">
                        <h3>Quick Link</h3>
                        <ul class="ps-0 mb-0">
                            <li><a href="{{ url('services') }}">Services</a></li>
                            <li><a href="{{ url('about-us') }}">Our Team</a></li>
                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <h3></h3>
                        <ul class="ps-0 mb-0">
                            <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('careers') }}">Careers</a></li>
                            <li><a href="{{ url('blog') }}">Blog</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h3>Newsletter</h3>
                        <form class="quform" action="{{ url('newsletter') }}" method="post">
                            @csrf
                            <div class="quform-elements">
                                <div class="row">
                                    <!-- Begin Text input element -->
                                    <div class="col-md-12">
                                        <div class="quform-element mb-0">
                                            <div class="quform-input">
                                                <input class="form-control" id="email_address" type="text"
                                                    name="email_address" placeholder="Subscribe with us">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Text input element -->

                                    <!-- Begin Submit button -->
                                    <div class="col-md-12 mt-2">
                                        <div class="quform-submit-inner">
                                            <button class="butn-style1 secondary m-0 w-100" type="submit"
                                                onclick="return newsletter_submit()">Subscribe</button>
                                        </div>
                                        <div class="quform-loading-wrap text-start mt-3"><span
                                                class="quform-loading"></span></div>
                                    </div>
                                    <!-- End Submit button -->
                                    <div class="">
                                        <img src= "{{ asset('images/iso.png') }}" alt=""
                                            style="height:80px" width="100%">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3">
                        <div class="iso">
                            <img src= "{{ asset('images/review-1.png') }}" alt="" class="mb-2">
                            {{-- <img src= "{{ asset('images/iso.png') }}" alt="" style="height:80px"> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>© Copyrights <?= date('Y') ?> Maastrixsolutions | All Rights Reserved</p>
                </div>
                <div class="col-md-7">
                    <ul>
                        <li><a href="{{ url('terms-and-conditions') }}">Terms &amp; conditions</a></li>
                        <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ url('faq') }}">FAQs</a></li>
                        <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('feedback') }}">Feedback</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>

<script>
    function newsletter_submit() {
        var email = document.getElementById('email_address').value;
        if (email == "") {
            alert("Please Write Your Email address");
            return false;
        }
    }
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.js"></script>
<script>
    var items = $(".list-wrapper .list-item");
    var numItems = items.length;
    var perPage = 6;

    items.slice(perPage).hide();

    $('#pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "&laquo;",
        nextText: "&raquo;",
        onPageClick: function(pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
</script>
