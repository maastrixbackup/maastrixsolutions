@extends('layouts.include')

@section('include-section')
    <style>
        .job_details_view {
            background-color: #DBB4AB;
            width: 100%;
            /* border: 15px solid green; */
            padding: 50px;
            margin: 20px;
            margin-left: -8px;
            /* height: 550px; */
        }

        #g-recaptcha-response {
            display: block !important;
            position: absolute;
            margin: -78px 0 0 0 !important;
            width: 302px !important;
            height: 76px !important;
            z-index: -999999;
            opacity: 0;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#job_details').hide();
        });
    </script>
    <script>
        function myfun(obj) {
            var id = $(obj).attr('job-id');
            $.ajax({
                url: '/getjobdetail',
                type: 'post',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    id: id
                },
                success: function(res) {
                    // console.log(res[0].job_title);
                    $('#job_details').show();
                    $('#applied').html(res[0].job_title);
                    $('#requirment').html(res[0].job_description);
                    $('#skill').html(res[0].skills);
                    $('#experience').html(res[0].experience);
                    $('#location').html(res[0].location);

                }
            });
        }
    </script>

    <body class="inner_pages">

        <section class="banner_sec">
            <div id="" class="">
                <div class="banner_sec_img">
                    <img src="images/careers-banner.jpg" alt="" title="">
                    <div class="banner_sec_img_cont">
                        <div class="banner_sec_img_cont_inner">
                            <h1>Apply for Job</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bread-head">
            <div class="bread-inner">
                <div class="container">
                    <div class="row">
                        <div class="bread-sec">
                            <ul class="bed-crown">
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li><a>Apply for Job</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="jobapplymain">

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xl-4 col-md-12 col-sm-4">
                        <div class="contact_sec_right">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="jobapply_leftsection_top">Our Opening</div>
                                    <div class="jobapply_leftsection">
                                        @foreach ($jobs as $job)
                                            <div class="jobapply_leftsection_box">
                                                <big>{{ $job->job_title }}</big>
                                                <p>{{ $job->skills }}</p>
                                                <small>{{ $job->location }}</small><a><button
                                                        class="enroll_rightbox_pdf_btn pull-right" onclick="myfun(this)"
                                                        job-id="{{ $job->id }}"><i class="fa fa-briefcase"></i> Apply
                                                        This Job </button></a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-8 col-md-12 col-sm-8">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session('success') }}</strong>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="contact_sec_right">
                            <div class="job_details_view" id="job_details">
                                <h5>Applied For:</h5>
                                <p id="applied"></p>
                                <h5>Requirements:</h5>
                                <p id="requirment"></p>
                                <h5>Skills:</h5>
                                <p id="skill"></p>
                                <h5>Experience:</h5>
                                <p id="experience"></p>
                                <h5>Location:</h5>
                                <p id="location"></p>
                            </div>
                            <form action="{{ url('/job-apply/SendApply') }}" id="CandidateApplyForm"
                                enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                @csrf
                                <div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="jobapply_leftsection_top">Apply Here </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input"><label for="fname">First Name</label><input name="fname"
                                                id="fname" placeholder="First Name" class="form_input" maxlength="100"
                                                type="text"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input"><label for="lname">Last Name</label><input name="lname"
                                                id="lname" placeholder="Last Name" class="form_input" maxlength="100"
                                                type="text"></div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input email"><label for="email">Email Address</label>
                                            <input type="email" name="email" id="email" placeholder="Email Address"
                                                class="form_input" maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input number"><label for="phone">Phone Number</label><input
                                                name="ContactNum" id="phone" placeholder="Phone Number"
                                                class="form_input" type="text" maxlength="10"></div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox_dob">
                                        <div class="input date"><label for="CandidateDobDay">Date of Birth</label>
                                            <div class="d-fl">
                                                <input name="DOB" id="state" placeholder="DOB"
                                                    class="form_input" maxlength="100" type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <fieldset>
                                            <legend>Gender</legend>
                                            <input type="radio" name="gender" id="CandidateGenderMale" value="male"
                                                checked="checked">
                                            <label for="CandidateGenderMale">Male</label>
                                            <input type="radio" name="gender" id="CandidateGenderFemale"
                                                value="female">
                                            <label for="CandidateGenderFemale">Female</label>
                                        </fieldset>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 jobapply_formbox">
                                        <div class="input textarea">
                                            <label for="address">Present Address</label>
                                            <textarea name="address" id="address" placeholder="Present Address" class="form_input" cols="30"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input select"><label for="country">Country</label><select
                                                name="country" id="country"
                                                class="selectboxjquery form_input dropdown">
                                                <option value="">Select</option>
                                                <option value="3">Afghanistan</option>
                                                <option value="4">Albania</option>
                                                <option value="5">Algeria</option>
                                                <option value="6">American Samoa</option>
                                                <option value="7">Andorra</option>
                                                <option value="8">Angola</option>
                                                <option value="9">Anguilla</option>
                                                <option value="10">Antarctica</option>
                                                <option value="11">Antigua and/or Barbuda</option>
                                                <option value="12">Argentina</option>
                                                <option value="13">Armenia</option>
                                                <option value="14">Aruba</option>
                                                <option value="15">Australia</option>
                                                <option value="16">Austria</option>
                                                <option value="17">Azerbaijan</option>
                                                <option value="18">Bahamas</option>
                                                <option value="19">Bahrain</option>
                                                <option value="20">Bangladesh</option>
                                                <option value="21">Barbados</option>
                                                <option value="22">Belarus</option>
                                                <option value="23">Belgium</option>
                                                <option value="24">Belize</option>
                                                <option value="25">Benin</option>
                                                <option value="26">Bermuda</option>
                                                <option value="27">Bhutan</option>
                                                <option value="28">Bolivia</option>
                                                <option value="29">Bosnia and Herzegovina</option>
                                                <option value="30">Botswana</option>
                                                <option value="31">Bouvet Island</option>
                                                <option value="32">Brazil</option>
                                                <option value="33">British Indian Ocean Territory</option>
                                                <option value="34">Brunei Darussalam</option>
                                                <option value="35">Bulgaria</option>
                                                <option value="36">Burkina Faso</option>
                                                <option value="37">Burundi</option>
                                                <option value="38">Cambodia</option>
                                                <option value="39">Cameroon</option>
                                                <option value="40">Canada</option>
                                                <option value="41">Cape Verde</option>
                                                <option value="42">Cayman Islands</option>
                                                <option value="43">Central African Republic</option>
                                                <option value="44">Chad</option>
                                                <option value="45">Chile</option>
                                                <option value="46">China</option>
                                                <option value="47">Cocos (Keeling) Islands</option>
                                                <option value="48">Colombia</option>
                                                <option value="49">Comoros</option>
                                                <option value="50">Congo</option>
                                                <option value="51">Cook Islands</option>
                                                <option value="52">Costa Rica</option>
                                                <option value="53">Croatia (Hrvatska)</option>
                                                <option value="54">Cuba</option>
                                                <option value="55">Cyprus</option>
                                                <option value="56">Czech Republic</option>
                                                <option value="57">Denmark</option>
                                                <option value="58">Djibouti</option>
                                                <option value="59">Dominica</option>
                                                <option value="60">Dominican Republic</option>
                                                <option value="61">East Timor</option>
                                                <option value="62">Ecuador</option>
                                                <option value="63">Egypt</option>
                                                <option value="64">El Salvador</option>
                                                <option value="65">Equatorial Guinea</option>
                                                <option value="66">Eritrea</option>
                                                <option value="67">Estonia</option>
                                                <option value="68">Ethiopia</option>
                                                <option value="69">Falkland Islands (Malvinas)</option>
                                                <option value="70">Faroe Islands</option>
                                                <option value="71">Fiji</option>
                                                <option value="72">Finland</option>
                                                <option value="73">France</option>
                                                <option value="74">France, Metropolitan</option>
                                                <option value="75">French Guiana</option>
                                                <option value="76">French Polynesia</option>
                                                <option value="77">French Southern Territories</option>
                                                <option value="78">Gabon</option>
                                                <option value="79">Gambia</option>
                                                <option value="80">Georgia</option>
                                                <option value="81">Germany</option>
                                                <option value="82">Ghana</option>
                                                <option value="83">Gibraltar</option>
                                                <option value="84">Guernsey</option>
                                                <option value="85">Greece</option>
                                                <option value="86">Greenland</option>
                                                <option value="87">Grenada</option>
                                                <option value="88">Guadeloupe</option>
                                                <option value="89">Guam</option>
                                                <option value="90">Guatemala</option>
                                                <option value="91">Guinea</option>
                                                <option value="92">Guinea-Bissau</option>
                                                <option value="93">Guyana</option>
                                                <option value="94">Haiti</option>
                                                <option value="95">Heard and Mc Donald Islands</option>
                                                <option value="96">Honduras</option>
                                                <option value="97">Hong Kong</option>
                                                <option value="98">Hungary</option>
                                                <option value="99">Iceland</option>
                                                <option value="100">India</option>
                                                <option value="101">Isle of Man</option>
                                                <option value="102">Indonesia</option>
                                                <option value="103">Iran (Islamic Republic of)</option>
                                                <option value="104">Iraq</option>
                                                <option value="105">Ireland</option>
                                                <option value="106">Israel</option>
                                                <option value="107">Italy</option>
                                                <option value="108">Ivory Coast</option>
                                                <option value="109">Jersey</option>
                                                <option value="110">Jamaica</option>
                                                <option value="111">Japan</option>
                                                <option value="112">Jordan</option>
                                                <option value="113">Kazakhstan</option>
                                                <option value="114">Kenya</option>
                                                <option value="115">Kiribati</option>
                                                <option value="116">Korea, Democratic People's Republic of</option>
                                                <option value="117">Korea, Republic of</option>
                                                <option value="118">Kosovo</option>
                                                <option value="119">Kuwait</option>
                                                <option value="120">Kyrgyzstan</option>
                                                <option value="121">Lao People's Democratic Republic</option>
                                                <option value="122">Latvia</option>
                                                <option value="123">Lebanon</option>
                                                <option value="124">Lesotho</option>
                                                <option value="125">Liberia</option>
                                                <option value="126">Libyan Arab Jamahiriya</option>
                                                <option value="127">Liechtenstein</option>
                                                <option value="128">Luxembourg</option>
                                                <option value="129">Macau</option>
                                                <option value="130">Macedonia</option>
                                                <option value="131">Madagascar</option>
                                                <option value="132">Malawi</option>
                                                <option value="133">Malaysia</option>
                                                <option value="134">Maldives</option>
                                                <option value="135">Mali</option>
                                                <option value="136">Malta</option>
                                                <option value="137">Marshall Islands</option>
                                                <option value="138">Martinique</option>
                                                <option value="139">Mauritania</option>
                                                <option value="140">Mauritius</option>
                                                <option value="141">Mayotte</option>
                                                <option value="142">Mexico</option>
                                                <option value="143">Micronesia, Federated States of</option>
                                                <option value="144">Moldova, Republic of</option>
                                                <option value="145">Monaco</option>
                                                <option value="146">Mongolia</option>
                                                <option value="147">Montenegro</option>
                                                <option value="148">Montserrat</option>
                                                <option value="149">Morocco</option>
                                                <option value="150">Mozambique</option>
                                                <option value="151">Myanmar</option>
                                                <option value="152">Namibia</option>
                                                <option value="153">Nauru</option>
                                                <option value="154">Nepal</option>
                                                <option value="155">Netherlands</option>
                                                <option value="156">Netherlands Antilles</option>
                                                <option value="157">New Caledonia</option>
                                                <option value="158">New Zealand</option>
                                                <option value="159">Nicaragua</option>
                                                <option value="160">Niger</option>
                                                <option value="161">Nigeria</option>
                                                <option value="162">Niue</option>
                                                <option value="163">Norfolk Island</option>
                                                <option value="164">Northern Mariana Islands</option>
                                                <option value="165">Norway</option>
                                                <option value="166">Oman</option>
                                                <option value="167">Pakistan</option>
                                                <option value="168">Palau</option>
                                                <option value="169">Palestine</option>
                                                <option value="170">Panama</option>
                                                <option value="171">Papua New Guinea</option>
                                                <option value="172">Paraguay</option>
                                                <option value="173">Peru</option>
                                                <option value="174">Philippines</option>
                                                <option value="175">Pitcairn</option>
                                                <option value="176">Poland</option>
                                                <option value="177">Puerto Rico</option>
                                                <option value="178">Qatar</option>
                                                <option value="179">Reunion</option>
                                                <option value="180">Romania</option>
                                                <option value="181">Russian Federation</option>
                                                <option value="182">Rwanda</option>
                                                <option value="183">Saint Kitts and Nevis</option>
                                                <option value="184">Saint Lucia</option>
                                                <option value="185">Saint Vincent and the Grenadines</option>
                                                <option value="186">Samoa</option>
                                                <option value="187">San Marino</option>
                                                <option value="188">Sao Tome and Principe</option>
                                                <option value="189">Saudi Arabia</option>
                                                <option value="190">Senegal</option>
                                                <option value="191">Serbia</option>
                                                <option value="192">Seychelles</option>
                                                <option value="193">Sierra Leone</option>
                                                <option value="194">Singapore</option>
                                                <option value="195">Slovakia</option>
                                                <option value="196">Slovenia</option>
                                                <option value="197">Solomon Islands</option>
                                                <option value="198">Somalia</option>
                                                <option value="199">South Africa</option>
                                                <option value="200">South Georgia South Sandwich Islands</option>
                                                <option value="201">Spain</option>
                                                <option value="202">Sri Lanka</option>
                                                <option value="203">St. Helena</option>
                                                <option value="204">St. Pierre and Miquelon</option>
                                                <option value="205">Sudan</option>
                                                <option value="206">Suriname</option>
                                                <option value="207">Svalbard and Jan Mayen Islands</option>
                                                <option value="208">Swaziland</option>
                                                <option value="209">Sweden</option>
                                                <option value="210">Switzerland</option>
                                                <option value="211">Syrian Arab Republic</option>
                                                <option value="212">Taiwan</option>
                                                <option value="213">Tajikistan</option>
                                                <option value="214">Tanzania, United Republic of</option>
                                                <option value="215">Thailand</option>
                                                <option value="216">Togo</option>
                                                <option value="217">Tokelau</option>
                                                <option value="218">Tonga</option>
                                                <option value="219">Trinidad and Tobago</option>
                                                <option value="220">Tunisia</option>
                                                <option value="221">Turkey</option>
                                                <option value="222">Turkmenistan</option>
                                                <option value="223">Turks and Caicos Islands</option>
                                                <option value="224">Tuvalu</option>
                                                <option value="225">Uganda</option>
                                                <option value="226">Ukraine</option>
                                                <option value="227">United Arab Emirates</option>
                                                <option value="228">United Kingdom</option>
                                                <option value="229">United States</option>
                                                <option value="230">United States minor outlying islands</option>
                                                <option value="231">Uruguay</option>
                                                <option value="232">Uzbekistan</option>
                                                <option value="233">Vanuatu</option>
                                                <option value="234">Vatican City State</option>
                                                <option value="235">Venezuela</option>
                                                <option value="236">Vietnam</option>
                                                <option value="237">Virgin Islands (British)</option>
                                                <option value="238">Virgin Islands (U.S.)</option>
                                                <option value="239">Wallis and Futuna Islands</option>
                                                <option value="240">Western Sahara</option>
                                                <option value="241">Yemen</option>
                                                <option value="242">Yugoslavia</option>
                                                <option value="243">Zaire</option>
                                                <option value="244">Zambia</option>
                                                <option value="245">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="state">State</label>
                                            <input name="state" id="state" placeholder="State" class="form_input"
                                                maxlength="100" type="text">
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="city">City</label>
                                            <input name="city" id="city" placeholder="City" class="form_input"
                                                maxlength="100" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="zip">Zip</label>
                                            <input name="Zip" id="zip" placeholder="Zip" class="form_input"
                                                maxlength="10" type="text">
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input textarea">
                                            <label for="primary_skills">Primary Skills</label>
                                            <textarea name="PrimarySkills" id="primary_skills" placeholder="Primary Skills" class="form_input" cols="30"
                                                rows="6"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input textarea">
                                            <label for="secondary_skills">Secondary Skills</label>
                                            <textarea name="SecondarySkills" id="secondary_skills" placeholder="Secondary Skills" class="form_input"
                                                cols="30" rows="6"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="experience">Experience</label>
                                            <input name="experience" id="experience" placeholder="Experience"
                                                class="form_input" maxlength="50" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="current_employer">Current Employer</label>
                                            <input name="CurrentEmployer" id="current_employer"
                                                placeholder="Current Employer" class="form_input" maxlength="100"
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input">
                                            <label for="highest_qualification">Qualification</label>
                                            <input name="qualification" id="highest_qualification"
                                                placeholder="Qualification" class="form_input" maxlength="255"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 jobapply_formbox">
                                        <div class="input file">
                                            <label for="resume">Upload Resume</label><input type="file"
                                                name="resume" id="resume" class="filefield">
                                        </div>
                                    </div>
                                </div>
                                <hr class="steps1_from_clear">
                                <hr class="steps1_from_clear">
                                <div class="col-lg-6 col-md-6">
                                    <div class="g-recaptcha" data-sitekey="6LchUD4iAAAAANQFkOOMenAXbq9iSqysajf0LAa-">
                                    </div><br>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="submit">
                                            <!-- onclick="return applyJob()"  -->
                                            <input class="enroll_rightbox_pdf_btn big" type="submit" value="Apply">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const nameFields = document.querySelectorAll('#fname, #lname');

                nameFields.forEach(field => {
                    field.addEventListener('input', function() {
                        // Remove numbers from the input
                        this.value = this.value.replace(/[0-9]/g, '');
                    });
                });
            });
        </script>

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
                                            <!--  <p>Lorem ipsum dolor sit co adipiscing elit, sed eiusmo accums facilisis.</p> -->
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

        <div class="fullScreen">
            <div class="inputBox">
                <input type="text" placeholder="Search here...">
                <button type="submit">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <div class="closeBtn">
                <i class="fas fa-times"></i>
            </div>
        </div>
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
                // autoplayTimeout:1000,
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
    @endsection
