@extends('layouts.include')

@section('include-section')
    <style>
        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 76px !important;
            z-index: -999999;
            opacity: 0;
        }

        .captcha-allign {
            margin-bottom: 33px;
            margin-top: 31px;
        }
    </style>
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

    <body>
        <section class="banner_sec">
            <div id="" class="">
                @foreach ($banner as $banner)
                    <div class="banner_sec_img">
                        <img src="{{ url('homebanners/' . $banner->banner_name) }}">
                        <div class="banner_sec_img_cont">
                            <div class="banner_sec_img_cont_inner">
                                <h1>{!! $banner->banner_heading !!}</h1>
                                <!-- <h6>{{ $banner->banner_subheading }}</h6> -->
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- <div class="banner_sec_img">
                    <img src="images/contact-banner.jpg" alt="" title="">
                    <div class="banner_sec_img_cont">
                        <div class="banner_sec_img_cont_inner">
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="bread-head">
            <div class="bread-inner">
                <div class="container">
                    <div class="row">
                        <div class="bread-sec">
                            <ul class="bed-crown">
                                <li><a href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                                <li><a>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="contact_sec">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="contact_sec_main">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="contact_sec_left">
                                        <h3>Have A Project in Mind? Say Hi!</h3>
                                        <p>Please give us a call, drop us an email, or fill out the contact form and we'll
                                            get back to you.</p>
                                        <div class="contact_card">
                                            <h4><i class="fas fa-map-marker-alt"></i> Address: </h4>
                                            <p><?php echo $carr[0]; ?></p>
                                        </div>
                                        <div class="contact_card">
                                            <h4><i class="fas fa-envelope-open-text"></i> Email: </h4>
                                            <p><?php echo $carr[2]; ?></p>
                                        </div>
                                        <div class="contact_card">
                                            <h4><i class="fas fa-phone-office"></i> Call: </h4>
                                            <p><?php echo $carr[1]; ?></p>
                                        </div>
                                        <div class="contact_card">
                                            <h4><i class="fas fa-globe"></i> Web: </h4>
                                            <p><?= $carr[3] ?></p>
                                        </div>
                                        <!-- <div class="contact-card">
                                            <h4>Follow Us:</h4>
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7">
                                    <div class="contact_sec_right">
                                        <form action="{{ url('contact-us/send') }}" id="maasForm" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="contact_sec_right_single">
                                                        <input type="text" name="fullname" id="fullName" placeholder="Name*"
                                                            class="form_input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="contact_sec_right_single">
                                                        <input type="text" name="email" placeholder="Email*"
                                                            class="form_input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="contact_sec_right_single">
                                                        <input type="text" name="Pnum"
                                                            placeholder="Enter Your Phone/Mobile #" class="form_input">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="contact_sec_right_single">
                                                        <select class="form_input dropdown" name="service">
                                                            <option disabled selected>Select Service</option>
                                                            <option value="web_design">Web Design</option>
                                                            <option value="it_outsourcing">It Outsourcing</option>
                                                            <option value="web_application">Web Application</option>
                                                            <option value="ecommerce_solution">Ecommerce Solution</option>
                                                            <option value="seo">SEO</option>
                                                            <option value="mobile_application">Mobile Application</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="contact_sec_right_single">
                                                        <select class="form_input dropdown" name="country">
                                                            <option selected disabled>Select Country</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antartica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina
                                                            </option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British Indian
                                                                Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo">Congo, the Democratic Republic of the
                                                            </option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                                            <option value="Croatia">Croatia (Hrvatska)</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands (Malvinas)
                                                            </option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="France Metropolitan">France, Metropolitan
                                                            </option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Heard and McDonald Islands">Heard and Mc Donald
                                                                Islands</option>
                                                            <option value="Holy See">Holy See (Vatican City State)</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Iran">Iran (Islamic Republic of)</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Democratic People's Republic of Korea">Korea,
                                                                Democratic People's Republic of</option>
                                                            <option value="Korea">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao">Lao People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                            </option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia, The Former Yugoslav
                                                                Republic of</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Micronesia">Micronesia, Federated States of
                                                            </option>
                                                            <option value="Moldova">Moldova, Republic of</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Namibia">Namibia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherlands">Netherlands</option>
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau">Palau</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Pitcairn">Pitcairn</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russian Federation</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                                            <option value="Saint Vincent">Saint Vincent and the Grenadines
                                                            </option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="South Georgia">South Georgia and the South
                                                                Sandwich Islands</option>
                                                            <option value="Span">Spain</option>
                                                            <option value="SriLanka">Sri Lanka</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Pierre and Miguelon">St. Pierre and Miquelon
                                                            </option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard">Svalbard and Jan Mayen Islands
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syrian Arab Republic</option>
                                                            <option value="Taiwan">Taiwan, Province of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania, United Republic of</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos">Turks and Caicos Islands
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Viet Nam</option>
                                                            <option value="Virgin Islands (British)">Virgin Islands
                                                                (British)</option>
                                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Futana Islands">Wallis and Futuna
                                                                Islands</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="contact_sec_right_single">
                                                        <textarea name="address" id="address" class="form_input" placeholder="Your Address.." cols="30"
                                                            rows="5" data-error="Please enter your message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="contact_sec_right_single">
                                                        <textarea name="msg" id="message" class="form_input" placeholder="Your Messages.." cols="30"
                                                            rows="5" data-error="Please enter your message"></textarea>
                                                    </div>

                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="contact_sec_right_single">
                                                        <label>Preferred Method Of Contact</label><br>
                                                        <input type="radio" name="mode_of_contact" value="email"
                                                            checked><b>Email</b>&nbsp&nbsp &nbsp
                                                        <input type="radio" name="mode_of_contact"
                                                            value="phone"><b>Phone</b>
                                                    </div>
                                                </div><br>
                                                <div class="col-lg-6 col-md-6 captcha-allign">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LchUD4iAAAAANQFkOOMenAXbq9iSqysajf0LAa-"></div><br>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="contact_sec_right_single">
                                                        <button type="submit">Send Message<i
                                                                class="fas fa-arrow-right"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map_sec">
            <div class="map_jordan">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.1090150346226!2d85.82503641439546!3d20.295754317773252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909c288ce88b3%3A0xe55da71d4e1fc078!2sMAASTRIX%20SOLUTIONS!5e0!3m2!1sen!2sin!4v1663758241649!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

        <section class="testimonial_sec">
            <div class="">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="testimonial_sec_main">
                            <div class="row">
                                <div class="col-lg-4 col-xl-4 col-md-4">
                                    <div class="testimonial_left">
                                        <div class="default-section-title">
                                            <span>Testimonials</span>
                                            <h3>What Our Clients Say About Us</h3>
                                            <!-- <p>Lorem ipsum dolor sit co adipiscing elit, sed eiusmo accums facilisis.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-xl-8 col-md-8">
                                    <div class="testi_right_sec owl-carousel" id="testimonial_slide">
                                        @foreach ($all_testimonial as $all_testimonial)
                                            <div class="testi_right_sec_single">
                                                <!-- <img src="{{ url('testimonial_photo/' . $all_testimonial->photo) }}" alt="image"> -->
                                                <div class="testimonial-card-text">
                                                    <p>“{{ $all_testimonial->remark }}”</p>
                                                    <div class="testimonial-intro-area">
                                                        <div class="testimonial-card-intro">
                                                            <h4>{{ $all_testimonial->name }}</h4>
                                                            <span>{{ $all_testimonial->country }}</span>
                                                        </div>
                                                        <div class="stars">
                                                            <ul>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                                <li><i class="fas fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <!-- <div class="testi_right_sec_single">
                                            <img src="images/tc3.jpg" alt="image">
                                            <div class="testimonial-card-text">
                                                <p>“It is a long established fact that a reader will page when looking at its layout. The point of opposed to using 'Content here, content here', making it look like readable English.”</p>
                                                <div class="testimonial-intro-area">
                                                    <div class="testimonial-card-intro">
                                                        <h4>Peter Smith</h4>
                                                        <span>Front End Developer</span>
                                                    </div>
                                                    <div class="stars">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <script type="text/javascript">
            const btn =
                document.querySelector(".myBtn")
            const searchBox =
                document.querySelector(".fullScreen")
            const closeBtn =
                document.querySelector(".closeBtn")


            closeBtn.addEventListener("click", () => {
                searchBox.style.display = "none"
            })

            btn.addEventListener('click', () => {
                searchBox.style.display = "block"
            })
        </script>

        <!--=========================== Script Start ===========================-->

        <a href="#" class="back-to-top" style="display: none;"><i class="fa fa-arrow-up"
                aria-hidden="true"></i></a>

        <script type="text/javascript">
            $("#cssmenu").menumaker({
                title: "",
                format: "multitoggle"
            });
        </script>


        <script>
            wow = new WOW({
                animateClass: 'animated',
                offset: 0,
                callback: function(box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            });
            wow.init();
            document.getElementById('moar').onclick = function() {
                var section = document.createElement('section');
                section.className = 'section--purple wow fadeInDown';
                this.parentNode.insertBefore(section, this);
            };
        </script>

        <script>
            jQuery("#hm_banner").owlCarousel({
                lazyLoad: true,
                loop: true,
                margin: 0,
                responsiveClass: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 3500,
                autoplayHoverPause: false,
                autoHeight: true,
                mouseDrag: true,
                touchDrag: true,
                smartSpeed: 1000,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 1
                    },

                    1024: {
                        items: 1
                    },

                    1366: {
                        items: 1
                    }
                }
            });
        </script>

        <script>
            jQuery("#testimonial_slide").owlCarousel({
                stagePadding: 80,
                lazyLoad: true,
                loop: true,
                margin: 10,
                responsiveClass: true,
                // animateOut: 'fadeOut',
                // animateIn: 'fadeIn',
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: false,
                autoHeight: true,
                mouseDrag: true,
                touchDrag: true,
                smartSpeed: 1000,
                nav: false,
                dots: false,
                responsive: {
                    0: {
                        items: 1,
                        stagePadding: 0
                    },

                    600: {
                        items: 1
                    },

                    1024: {
                        items: 2
                    },

                    1366: {
                        items: 2
                    }
                }
            });
        </script>


        <script>
            jQuery(document).ready(function() {
                var offset = 220;
                var duration = 500;
                jQuery(window).scroll(function() {
                    if (jQuery(this).scrollTop() > offset) {
                        jQuery('.back-to-top').fadeIn(duration);
                    } else {
                        jQuery('.back-to-top').fadeOut(duration);
                    }
                });

                jQuery('.back-to-top').click(function(event) {
                    event.preventDefault();
                    jQuery('html, body').animate({
                        scrollTop: 0
                    }, duration);
                    return false;
                })
            });
        </script>


        <script>
            $(document).ready(function() {
                var owl = $('#owl-carousel1');
                owl.owlCarousel({
                    margin: 20,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    loop: true,
                    responsive: {
                        0: {
                            items: 2
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 6
                        }
                    }
                })
            })
        </script>

        <script type="text/javascript">
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 100) {
                    $('.head_sec').addClass('sticky_header animated fadeInDown');
                } else {
                    $('.head_sec').removeClass('sticky_header animated fadeInDown');
                }
            });
        </script>
        <script>
            window.onload = function() {
                var $recaptcha = document.querySelector('#g-recaptcha-response');
                if ($recaptcha) {
                    $recaptcha.setAttribute("required", "required");
                }
            };
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const nameFields = document.querySelectorAll('#fullName');

                nameFields.forEach(field => {
                    field.addEventListener('input', function() {
                        // Remove numbers from the input
                        this.value = this.value.replace(/[0-9]/g, '');
                    });
                });
            });
        </script>



    @endsection
