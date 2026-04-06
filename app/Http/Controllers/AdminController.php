<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Stroage;
use App\Mail\Contact;
use App\Mail\ContactForm;
use App\Mail\JobApplyForm;
use Illuminate\contract\Mailer;
use Illuminate\Http\Response;
use PDF;
use App\Models\Contact_u;
use App\Models\Get_a_Quote;
use App\Models\ApplyForm;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Contact_details;
use App\Models\Job_opening;
use App\Models\Footer_scroll_image;
use App\Models\Home;
use App\Models\Client;
use App\Models\Profile;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Demo;
use App\Models\Blog;
use App\Models\Social;
use App\Models\Card;
use App\Models\Introduction;
use App\Models\Faq;
use App\Models\Aboutservice;
use App\Models\Privacy_policy;
use App\Models\Newsletter;
use App\Models\Questionnaire;
use App\Models\QuestionnaireDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('contact-us');
    }
    public function index2()
    {
        return view('AdminDashboard.ContactUsList');
    }
    public function index3()
    {
        return view('AdminDashboard.GetAQuoteList');
    }
    public function index4()
    {
        return view('AdminDashboard.CarrersListApplyJob');
    }
    public function index5()
    {
        return view('AdminDashboard.ManageBanner');
    }
    //     public function index6(){
    //     return view('AdminDashboard.Testimonial');
    // }
    public function dashboard()
    {
        $count = Job_opening::count();
        $count1 = Contact_u::count();
        $cv = ApplyForm::count();
        $quote = Get_a_Quote::count();
        return view('dashboard', compact('count', 'count1', 'cv', 'quote'));
    }


    public function send(Request $request)
    {
        $Contact_u  = new Contact_u;
        $Contact_u->fullname = $request->fullname;
        $Contact_u->email = $request->email;
        $Contact_u->service = $request->service;
        $Contact_u->country = $request->country;
        $Contact_u->Pnum = $request->Pnum;
        $Contact_u->msg = $request->msg;
        $Contact_u->address = $request->address;
        $Contact_u->mode_of_contact = $request->mode_of_contact;
        $Contact_u->save();
        // $usermail = $request->input('email');
        // echo $usermail;exit;
        $data  = array(
            'name_data' => $request->fullname,
            'email_data' => $request->email,
            'Pnum_data' => $request->Pnum,
            'service_data' => $request->service,
            'country_data' => $request->country,
            'address_data' => $request->address,
            'msg_data' => $request->msg,
            'moc_data' => $request->mode_of_contact
        );
        Mail::send('emails.sendMails', $data, function ($message) use ($request) {
            $message->to('hr@maastrixsolutions.com', 'Maastrix')
                ->subject('Laravel email with Jquery validation' . $request->name);
            $message->from('aloknayak442@gmail.com');
        });
        Mail::send('emails.ReplayContactMail', $data, function ($message) use ($request) {
            $message->to($request->email, 'Maastrix')
                ->subject('Confirmation Mail to' . $request->name);
            $message->from('aloknayak442@gmail.com');
        });

        return redirect()->back()->with('success', 'Thanks for Contacting us.We will contact you soon');
    }

    public function ListSend()
    {
        $Contact_u = Contact_u::all();

        return view('AdminDashboard.ContactUsList', compact('Contact_u'));
    }

    public function contactFormSend(Request $request)
    {

        $Get_a_Quote  = new Get_a_Quote;
        $Get_a_Quote->Username = $request->Username;
        $Get_a_Quote->email = $request->email;
        $Get_a_Quote->CountryCode = $request->CountryCode;
        $Get_a_Quote->PhoneNum = $request->PhoneNum;
        $Get_a_Quote->CName = $request->CName;
        $Get_a_Quote->Subject = $request->Subject;
        $Get_a_Quote->Money = $request->radio;
        $Get_a_Quote->msgs = $request->msgs;
        $Get_a_Quote->save();


        $data  = array(
            'Username_data' => $request->Username,
            'email_data' => $request->email,
            'PhoneNum_data' => $request->PhoneNum,
            'CName_data' => $request->CName,
            'Subject_data' => $request->Subject,
            'radio_data' => $request->radio,
            'msgs_data' => $request->msgs
        );
        Mail::send('emails.sendMailsContactForm', $data, function ($message) use ($request) {
            $message->to('hr@maastrixsolutions.com', 'Maastrix')
                ->subject('Laravel email with Jquery validation' . $request->name);
            $message->from('info@maastrixsolutions.com');
        });

        Mail::send('emails.ReplayQuoteMail', $data, function ($message) use ($request) {
            $message->to($request->email, 'Maastrix')
                ->subject('Confirmation Mail From Maastrix Solution' . $request->name);
            $message->from('info@maastrixsolutions.com');
        });
        return redirect()->back()->with('success', 'Thank you! We got your Query.');
    }

    public function ListcontactFormSend()
    {
        $Get_a_Quote = Get_a_Quote::all();
        return view('AdminDashboard.GetAQuoteList', compact('Get_a_Quote'));
    }

    public function SendApply(Request $request)
    {
        $ApplyForm  = new ApplyForm;
        $destinationPath = '/uploads';
        $imgfile = $request->file('resume');
        $imgFilename = $imgfile->getClientOriginalName();
        $imgfile->move(public_path() . $destinationPath, $imgfile->getClientOriginalName());
        $resume = $destinationPath . "/" . $imgFilename;
        $ApplyForm->resume = $resume;

        $ApplyForm->fname = $request->fname;
        $ApplyForm->email = $request->email;
        $ApplyForm->lname = $request->lname;
        $ApplyForm->ContactNum = $request->ContactNum;

        $ApplyForm->DOB = $request->DOB;
        $ApplyForm->gender = $request->gender;
        $ApplyForm->address = $request->address;
        $ApplyForm->country = $request->country;
        $ApplyForm->state = $request->state;
        $ApplyForm->city = $request->city;
        $ApplyForm->Zip = $request->Zip;
        $ApplyForm->PrimarySkills = $request->PrimarySkills;
        $ApplyForm->SecondarySkills = $request->SecondarySkills;
        $ApplyForm->experience = $request->experience;
        $ApplyForm->CurrentEmployer = $request->CurrentEmployer;

        $ApplyForm->qualification = $request->qualification;
        // dd($request->email);
        $ApplyForm->save();

        $data  = array(
            'fname_data' => $request->fname,
            'lname_data' => $request->lname,
            'email_data' => $request->email,
            'ContactNum_data' => $request->ContactNum,
            'DOB_data' => $request->DOB,
            'gender_data' => $request->gender,
            'address_data' => $request->address,
            'country_data' => $request->country,
            'state_data' => $request->state,
            'city_data' => $request->city,
            'Zip_data' => $request->Zip,
            'PrimarySkills_data' => $request->PrimarySkills,
            'SecondarySkills_data' => $request->SecondarySkills,
            'experience_data' => $request->experience,
            'CurrentEmployer_data' => $request->CurrentEmployer,
            'qualification_data' => $request->qualification,
            'resume_data' => asset($resume),
        );


        // ✅ Render Blade view to HTML
        $renderedPayload = view('emails.JobApplyForm', $data)->render();

        // ✅ Send as raw payload (text/html or text/plain)
        try {
            $curl = curl_init();

            $postFields = [
                'user_name' => $data['fname_data'] . ' ' . $data['lname_data'],
                'content'    => $renderedPayload,
                'subject'    => 'New Job Application : ' . $data['fname_data'] . ' ' . $data['lname_data'],
                'to_email'   => 'hr@maastrixsolutions.com',
                // 'to_email'   => 'bibhuprasad.maastrix@gmail.com',
                'from_email' => $data['email_data'],
            ];

            curl_setopt_array($curl, [
                CURLOPT_URL => 'https://apicalls.maastrixdemo.com/maastrix/send_email.php',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => http_build_query($postFields),
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/x-www-form-urlencoded',
                ],
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_SSL_VERIFYPEER => 0,
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

            // dd(json_decode($response, true));
            if ($err) {
                Log::error('cURL error while sending to PHPMailer API: ' . $err);
                // Return or handle error response
                // return response()->json(['status' => 'error', 'message' => $err], 500);
                dd('Error1:', $err);
            }

            if ($httpCode >= 200 && $httpCode < 300) {
                Log::info('Job application sent successfully.', ['response' => $response]);
                // Return or handle success response
                // return response()->json(['status' => 'success', 'response' => $response]);
                // dd('Success', json_decode($response, true));
            } else {
                Log::error('PHPMailer API failed.', ['status' => $httpCode, 'response' => $response]);
                // Return or handle failure response
                // return response()->json(['status' => 'error', 'http_code' => $httpCode, 'response' => $response], $httpCode);
                // dd($httpCode, $response);
            }
        } catch (\Exception $e) {
            Log::error('Exception during API call: ' . $e->getMessage());
        }

        // Mail::send('emails.JobApplyForm', $data, function ($message) use ($data) {
        //     $message->to('hr@maastrixsolutions.com', 'Maastrix')
        //         ->subject('New Job Application Received – ' . $data['fname_data'] . ' ' . $data['lname_data'])
        //         ->from(config('mail.from.address'), config('mail.from.name'));
        // });


        // Mail::send('emails.ReplayJobApply', $data, function ($message) use ($data) {
        //     $message->to('bibhuprasad.maastrix@gmail.com', 'Maastrix')
        //         ->subject('Confirmation Mail From Maastrix Solutions.');
        //     $message->from('hr@maastrixsolutions.com');
        // });
        return redirect()->back()->with('success', 'We got your Information. We will give a respose to you soon');
    }

    public function ListSendApply()
    {
        $ApplyForm = ApplyForm::all();
        return view('AdminDashboard.CarrersListApplyJob', compact('ApplyForm'));
    }
    public function ManageBanner()
    {
        // echo "Alok";exit;
        $All_list_banner = Banner::all();
        // echo "<pre>";
        // print_r($All_list_banner);exit;
        return view('AdminDashboard.ManageBanner', compact('All_list_banner'));
    }

    public function AddBannerForm()
    {
        return view('AdminDashboard.AddBannerForm');
    }
    public function storeimage(Request $request)
    {
        $input = $request->all();
        if ($request->file('banner_name')) {
            $file = $request->file('banner_name');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move('/homebanners', $filename);
            $input['banner_name'] = $filename;
        }
        Banner::create($input);
        return redirect('/ManageBanner')->with('message', 'Banner Added Successfully!');
    }

    public function update_banner()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        // echo $status;exit;
        $banner = DB::table('banners')
            ->where('id', $id)
            ->update(['status' => $status]);
        // echo"<pre>";
        print_r($banner);
    }
    public function delete_banner()
    {
        // echo "alok";exit;
        $id = $_POST['id'];
        $banner = DB::table('banners')->where('id', $id)->delete();
        print_r($banner);
    }
    public function edit_banner($id)
    {
        $banner_details = DB::table('banners')->where('id', '=', $id)->get();
        return view('AdminDashboard.BannerEditForm', compact('banner_details'));
    }
    public function updatebanner(Request $request, $id)
    {
        // echo $id;
        $banner_for = $request->input('banner_for');
        $head = $request->input('banner_heading');
        $subhead = $request->input('banner_subheading');

        $banner = DB::table('banners')
            ->where('id', $id)
            ->update(['banner_for' => $banner_for, 'banner_heading' => $head, 'banner_subheading' => $subhead]);
        if ($banner) {
            return redirect('ManageBanner')->with('message', 'Banner updated!!');
        }
    }
    public function viewbanner($id)
    {
        $view_banner = DB::table('banners')->where('id', '=', $id)->get();
        return view('AdminDashboard.viewbanner', compact('view_banner'));
    }
    public function managecard()
    {
        $allcards = Card::all();
        return view('AdminDashboard.managecard', compact('allcards'));
    }
    public function addcard()
    {
        return view('AdminDashboard.addcard');
    }
    public function savecard(Request $request)
    {
        $input = $request->all();
        // echo '<pre>';print_r($input);exit;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Home_banner_card_images'), $filename);
            $input['image'] = $filename;
        }
        Card::create($input);
        return redirect('Managecarddetails')->with('message', 'Details Save');
    }
    public function deletecard($id)
    {
        DB::table('cards')->where('id', $id)->delete();
        return redirect('Managecarddetails')->with('message', 'Deleted!');
    }
    public function editcard($id)
    {
        // echo $id;exit;
        $card_details = DB::table('cards')->where('id', '=', $id)->get();
        return view('AdminDashboard.editcardform', compact('card_details'));
    }
    public function updatecard(Request $request, $id)
    {
        $card_heading = $request->input('card_heading');
        $card_sub_heading = $request->input('card_sub_heading');

        DB::table('cards')
            ->where('id', $id)
            ->update(['card_heading' => $card_heading, 'card_sub_heading' => $card_sub_heading]);
        return redirect('Managecarddetails')->with('message', 'Card Details updated!!');
    }
    public function managesiteintro()
    {
        $intro = Introduction::all();
        return view('AdminDashboard.managesiteintro', compact('intro'));
    }

    public function addintroduction()
    {
        return view('AdminDashboard.addintroductionform');
    }

    public function saveintroduction(Request $request)
    {
        $data = $request->all();
        Introduction::create($data);
        return redirect('siteintroduction')->with('message', 'Content saved!');
    }

    public function AboutMaastrix()
    {
        return view('AdminDashboard.manageabout');
    }


    public function Testimonial()
    {
        $All_testimonial = Testimonial::all();
        // echo "Alok";
        return view('AdminDashboard.Testimonial', compact('All_testimonial'));
    }
    public function TestimonialForm()
    {
        return view('AdminDashboard.TestimonialForm');
    }
    public function savetestimonial(Request $request)
    {
        $input = $request->all();
        // echo "<pre>";
        // print_r($input);exit;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/testimonial_photo'), $filename);
            $input['photo'] = $filename;
        }
        Testimonial::create($input);
        return redirect('/Testimonial')->with('message', 'Testimonial Added Successfully!');
    }
    public function testimonial_status()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        // echo $status;exit;
        $testi = DB::table('testimonials')
            ->where('id', $id)
            ->update(['status' => $status]);
        // echo"<pre>";
        // print_r($testi);
    }
    public function edittestimonial($id)
    {
        $testimonial_details = DB::table('testimonials')->where('id', '=', $id)->get();
        return view('AdminDashboard.EditTestimonialForm', compact('testimonial_details'));
    }
    public function updatetestimonial(Request $request, $id)
    {
        $name = $request->input('name');
        $remark = $request->input('remark');
        $country = $request->input('country');

        $banner = DB::table('testimonials')
            ->where('id', $id)
            ->update(['name' => $name, 'remark' => $remark, 'country' => $country]);
        if ($banner) {
            return redirect('Testimonial')->with('message', 'Testimonial updated!!');
        }
    }
    public function deletetestimonial($id)
    {
        DB::table('testimonials')->where('id', $id)->delete();
        return redirect('Testimonial')->with('message', 'Testimonial Deleted!');
    }
    public function ManageContact()
    {
        $All_contact = Contact_details::all();
        return view('AdminDashboard.ManageContact', compact('All_contact'));
    }

    public function AddContactDetailsForm()
    {
        $contactdetails = DB::table('contact_details')->get();
        return view('AdminDashboard.AddContactForm', compact('contactdetails'));
    }

    public function savecontact(Request $request, $id)
    {
        $contct = Contact_details::find($id);
        $contct->address = $request->input('address');
        $contct->phone = $request->input('phone');
        $contct->email = $request->input('email');
        $contct->website = $request->input('website');
        $contct->update();
        return redirect('/AddContact')->with('message', 'Contact Updated Successfully!');
    }
    public function ContactEdit($id)
    {
        $contact_edit =  DB::table('clients')
            ->where('status', '=', 1)
            ->get();
    }
    public function contactDelete($id)
    {
        DB::table('contact_details')->where('id', $id)->delete();
        return redirect('ManageContactDetails')->with('message', 'Contact Deleted!');
    }
    public function managesocialmedia()
    {
        $social_media_links = Social::all();
        return view('AdminDashboard.AddsocialmediaForm', compact('social_media_links'));
    }

    public function socialmediasave(Request $request, $id)
    {
        $social_save = Social::find($id);

        $social_save->facebook = $request->input('facebook');
        $social_save->twitter = $request->input('twitter');
        $social_save->instagram = $request->input('instagram');
        $social_save->linkedin = $request->input('linkedin');
        $social_save->update();
        return redirect('/managesocialmedia')->with('message', 'Social Media Link Updated Successfully!');
    }

    public function ManageJob()
    {
        $All_job_list = Job_opening::all();
        return view('AdminDashboard.ManageJobOpening', compact('All_job_list'));
    }

    public function AddJobOpeningForm()
    {
        return view('AdminDashboard.AddJobForm');
    }

    public function savejob(Request $request)
    {
        $input = $request->all();
        Job_opening::create($input);
        return redirect('/ManageJobOpening')->with('message', 'Job Created!');
    }

    public function update_job_status()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        // echo $status;exit;
        $banner = DB::table('job_openings')
            ->where('id', $id)
            ->update(['status' => $status]);
        // echo"<pre>";
        print_r($banner);
    }
    public function deletejob($id)
    {
        DB::table('job_openings')->where('id', $id)->delete();
        return redirect('ManageJobOpening')->with('message', 'Job Deleted!');
    }
    public function editjob($id)
    {
        // echo $id;
        $job_details = DB::table('job_openings')->where('id', '=', $id)->get();
        // echo '<pre>';
        // print_r($job_details);exit;
        return view('AdminDashboard.editJob_details', compact('job_details'));
    }
    public function updatejob(Request $request, $id)
    {
        // echo $id;exit;
        $job = Job_opening::find($id);
        $job->job_title = $request->input('job_title');
        $job->job_description = $request->input('job_description');
        $job->location = $request->input('location');
        $job->update();
        return redirect('/ManageJobOpening')->with('message', 'Job Updated Successfully!');
    }
    public function viewjob($id)
    {
        $job_details = DB::table('job_openings')->where('id', '=', $id)->get();
        return view('AdminDashboard.viewjob', compact('job_details'));
    }
    public function imagescroll()
    {
        $all_scroll_image = Footer_scroll_image::all();
        return view('AdminDashboard.ManageFooterScrollImage', compact('all_scroll_image'));
    }

    public function scrollImageForm()
    {

        return view('AdminDashboard.ScrollImageForm');
    }

    public function scrollimagesave(Request $request)
    {
        $file = $request->file('scroll_image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('/Footer_Scroll_Images'), $filename);
        $save = new Footer_scroll_image;
        $save->scroll_image = $filename;
        $save->save();
        return redirect('/ManageScrollImage')->with('message', 'Image Saved');
    }

    public function updatestatus()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $scrl_image = DB::table('footer_scroll_images')
            ->where('id', $id)
            ->update(['status' => $status]);
        print_r($scrl_image);
    }
    public function deleteImage($id)
    {
        $delete_image = DB::table('footer_scroll_images')->where('id', $id)->delete();
        return redirect('/ManageScrollImage')->with('message', 'Image Deleted');

        // echo $id;exit;
    }
    public function homesection2()
    {
        $all_contents = Home::all();
        return view('AdminDashboard.HomeSection2', compact('all_contents'));
    }

    public function addcontent()
    {
        return view('AdminDashboard.AddSection2ContentForm');
    }
    public function saveContents(Request $request)
    {
        $input = $request->all();
        // print_r($input);exit;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/home_section2'), $filename);
            $input['image'] = $filename;
        }
        Home::create($input);
        return redirect('/home/Section2')->with('message', 'Contacts Added!');
    }
    public function deleteContents($id)
    {
        // dd($id);
        $delete = DB::table('homes')->where('id', $id)->delete();
        return redirect('home/Section2')->with('message', 'Deleted!!');
    }
    public function editContents($id)
    {
        $allcontent = DB::table('homes')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.EditContentForm', compact('allcontent'));
    }
    public function updateContents(Request $request, $id)
    {
        // echo $id;
        $heading = $request->input('heading');
        $content1 = $request->input('content1');
        $content2 = $request->input('content2');
        $content3 = $request->input('content3');
        $content4 = $request->input('content4');
        $content5 = $request->input('content5');
        $update = DB::table('homes')
            ->where('id', $id)
            ->update(['heading' => $heading, 'content1' => $content1, 'content2' => $content2, 'content3' => $content3, 'content4' => $content4]);
        if ($update) {
            return redirect('home/Section2')->with('message', 'Data updated');
        } else {
            return redirect('home/Section2')->with('message', 'error occured');
        }
    }
    public function viewContents($id)
    {
        // echo $id;exit;
        $viewcontent = DB::table('homes')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewContent', compact('viewcontent'));
    }

    public function whychoose()
    {
        $all_content = Profile::all();
        return view('AdminDashboard.whychoose', compact('all_content'));
    }

    public function addform()
    {
        return view('AdminDashboard.whychooseForm');
    }
    public function savewhychoose(Request $request)
    {
        $input = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/whychooseus'), $filename);
            $input['image'] = $filename;
        }
        Profile::create($input);
        return redirect('home/WhyChooseUs')->with('message', 'Content Added!');
    }
    public function deletewhychoose($id)
    {
        $delete_service = DB::table('profiles')->where('id', $id)->delete();
        return redirect('home/WhyChooseUs')->with('message', 'Deleted!');
    }

    public function viewwhychoose($id)
    {
        $view_content = DB::table('profiles')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.whychooseusView', compact('view_content'));
    }
    public function editwhychoose($id)
    {
        // echo $id;exit;
        $profiles = DB::table('profiles')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.editwhychooseus', compact('profiles'));
    }
    public function updatewhychoose(Request $request, $id)
    {
        $heading = $request->input('heading');
        $subheading = $request->input('sub_heading');
        $content = $request->input('content');
        $points = $request->input('points');
        // echo $points;exit;
        $serv = DB::table('profiles')
            ->where('id', $id)
            ->update(['heading' => $heading, 'sub_heading' => $subheading, 'content' => $content, 'points' => $points]);
        return redirect('home/WhyChooseUs')->with('message', 'Content updated!');
    }

    public function ServiceAbout()
    {
        $service_about = Aboutservice::all();
        return view('AdminDashboard.ManageServiceAbout', compact('service_about'));
    }

    public function ServiceAboutadd()
    {
        return view('AdminDashboard.ServiceAboutForm');
    }

    public function ServiceAboutsave(Request $request)
    {
        $input = $request->all();
        if ($request->file('about_image')) {
            $file = $request->file('about_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/service_about'), $filename);
            $input['about_image'] = $filename;
        }
        Aboutservice::create($input);
        return redirect('services/about')->with('message', 'Content Added!');
    }
    public function service()
    {
        $all_service = Service::all();
        return view('AdminDashboard.ManageService', compact('all_service'));
    }
    public function serviceadd()
    {
        return view('AdminDashboard.addServiceForm');
    }
    public function servicesave(Request $request)
    {
        // echo"Alok";exit;
        $input = $request->all();
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/ServiceImages'), $filename);
            $input['image'] = $filename;
        }
        Service::create($input);
        return redirect('home/Services')->with('message', 'Content Added!');
    }
    public function servicedelete($id)
    {
        $delete_service = DB::table('services')->where('id', $id)->delete();
        return redirect('home/Services')->with('message', 'Service Deleted!');
    }
    public function editservice($id)
    {
        $all_service = DB::table('services')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.EditServiceForm', compact('all_service'));
    }
    public function updateservice(Request $request, $id)
    {
        $heading = $request->input('heading');
        $content = $request->input('content');
        $points = $request->input('points');

        $serv = DB::table('services')
            ->where('id', $id)
            ->update(['heading' => $heading, 'content' => $content, 'points' => $points]);
        if ($serv) {
            return redirect('home/Services')->with('message', 'Services updated!');
        }
    }
    public function viewservice($id)
    {
        $view_service = DB::table('services')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewservices', compact('view_service'));
    }


    public function clients()
    {
        $all_client = Client::all();
        return view('AdminDashboard.ManageClients', compact('all_client'));
    }
    public function addclients()
    {
        return View('AdminDashboard.AddClientForm');
    }
    public function saveclients(Request $request)
    {
        $input = $request->all();
        if ($request->file('client_image')) {
            $file = $request->file('client_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Client_images'), $filename);
            $input['client_image'] = $filename;
        }
        Client::create($input);
        return redirect('home/Clients')->with('message', 'Client Added!');
    }
    public function statusClient()
    {
        $id = $_POST['id'];
        $status = $_POST['status'];
        $clint = DB::table('clients')
            ->where('id', $id)
            ->update(['status' => $status]);
        print_r($clint);
    }

    public function editclient($id)
    {
        // echo $id;
        $clients = DB::table('clients')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.editClient', compact('clients'));
    }
    public function updateclient(Request $request, $id)
    {
        // echo $id;exit;
        $name = $request->input('client_name');
        $location = $request->input('loaction');
        $clint = DB::table('clients')
            ->where('id', $id)
            ->update(['client_name' => $name, 'loaction' => $location]);
        if ($clint) {
            return redirect('home/Clients')->with('message', 'client updated!');
        }
    }
    public function viewclient($id)
    {
        $view_clients = DB::table('clients')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewclient', compact('view_clients'));
    }

    public function ManageProtfolio()
    {
        $all_portfolio = Portfolio::all();
        return view('AdminDashboard.ManagePortfolio', compact('all_portfolio'));
    }
    public function addportfolio()
    {
        return view('AdminDashboard.AddPortfolioForm');
    }
    public function saveportfolio(Request $request)
    {
        $input = $request->all();
        $portfolio_for = $request->input('portfolio_for');
        $portfolio_for = implode(',', $portfolio_for);
        $input = $request->except('portfolio_for');
        //Assign the "mutated" news value to $input
        $input['portfolio_for'] = $portfolio_for;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Portfolio_images'), $filename);
            $input['image'] = $filename;
        }
        if ($request->file('large_image')) {
            $large_file = $request->file('large_image');
            $large_filename = date('YmdHi') . $large_file->getClientOriginalName();
            $large_file->move(public_path('/Portfolio_images/largeportfolio'), $large_filename);
            $input['large_image'] = $large_filename;
        }
        // echo "<pre>";
        // print_r($input);exit;
        Portfolio::create($input);
        return redirect('home/Portfolio')->with('message', 'Portfolio Added!');
    }
    public function editportfolio($id)
    {
        $portfolio = DB::table('portfolios')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.editPortfolioForm', compact('portfolio'));
    }

    public function updateportfolio(Request $request, $id)
    {
        // echo $id;exit;
        $port = $request->input('portfolio_for');
        $heading = $request->input('heading');
        $content = $request->input('content');
        $features = $request->input('features');
        $url = $request->input('url');
        $type = $request->input('type');
        $technology = $request->input('technology');
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/Portfolio_images'), $filename);
            $input['image'] = $filename;
        }
        if ($request->file('large_image')) {
            $large_file = $request->file('large_image');
            $large_filename = date('YmdHi') . $large_file->getClientOriginalName();
            $large_file->move(public_path('/Portfolio_images/largeportfolio'), $large_filename);
            $input['large_image'] = $large_filename;
        }

        $folio = DB::table('portfolios')
            ->where('id', $id)
            ->update(['portfolio_for' => $port, 'heading' => $heading, 'content' => $content, 'features' => $features, 'url' => $url, 'type' => $type, 'technology' => $technology]);
        if ($folio) {
            return redirect('home/Portfolio')->with('message', 'Portfolio updated!');
        }
    }
    public function deleteportfolio($id)
    {
        $delete_portfolio = DB::table('portfolios')->where('id', $id)->delete();
        return redirect('home/Portfolio')->with('message', 'Portfolio Deleted!');
    }
    public function viewsportfolio($id)
    {
        $view_portfolio = DB::table('portfolios')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewportfolio', compact('view_portfolio'));
    }

    public function DesignDemo()
    {
        // echo"alok";exit;
        $all_demo = Demo::all();
        return view('AdminDashboard.designDemo', compact('all_demo'));
    }
    public function DesignDemoAdd()
    {
        return view('AdminDashboard.designDemoForm');
    }
    public function saveDesign(Request $request)
    {
        $input = $request->all();
        // echo '<pre>';
        // print_r($input);exit;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/DesignDemo'), $filename);
            $input['image'] = $filename;
        }
        // echo "<pre>";
        // print_r($input);exit;
        Demo::create($input);
        return redirect('page/DesignDemo')->with('message', 'Design Demo Added!');
    }

    public function deleteDesign($id)
    {
        DB::table('demos')->where('id', $id)->delete();
        return redirect('page/DesignDemo')->with('message', 'Design Demo Deleted!');
    }
    public function editDesign($id)
    {
        // echo $id;
        $design = DB::table('demos')->where('id', '=', $id)->get();
        return view('AdminDashboard.designDemoEdit', compact('design'));
    }
    public function updateDesign(Request $request, $id)
    {
        // echo $id;exit;
        $category = $request->input('category');
        $name = $request->input('name');
        $design_id = $request->input('design_id');
        $update_demo = DB::table('demos')
            ->where('id', $id)
            ->update(['category' => $category, 'name' => $name, 'design_id' => $design_id]);
        if ($update_demo) {
            return redirect('page/DesignDemo')->with('message', 'Design Demo Updated!');
        }
    }

    public function blogmanage()
    {
        $blog = Blog::all();
        return view('AdminDashboard.ManageBlog', compact('blog'));
    }
    public function addblog()
    {
        return view('AdminDashboard.AddBlogForm');
    }
    public function saveblog(Request $request)
    {
        $all_data = $request->all();
        $image = $request->file('blog_image');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image->move(public_path('/blog_images'), $image_name);
            $all_data['image'] = $image_name;
            Blog::Create($all_data);
        } else {
            Blog::Create($all_data);
        }
        return redirect('blog-manage')->with('message', 'Blog Added Successfully');
    }
    public function deleteblog($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect('blog-manage')->with('message', 'Blog Deleted');
    }
    public function viewblog($id)
    {
        $view_blog = DB::table('blogs')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewblog', compact('view_blog'));
    }
    public function editblog($id)
    {
        $edit_blog = DB::table('blogs')->where('id', '=', $id)->get();
        return view('AdminDashboard.BlogEditForm', compact('edit_blog'));
    }

    public function updateblog(Request $request, $id)
    {
        $blog_category = $request->input('blog_category');
        $blog_title = $request->input('blog_title');
        $blog_content = $request->input('blog_content');

        DB::table('blogs')
            ->where('id', $id)
            ->update(['blog_category' => $blog_category, 'blog_title' => $blog_title, 'blog_content' => $blog_content]);
        return redirect('blog-manage')->with('message', 'Blog updated!!');
    }

    public function faqmanage()
    {
        $all_faqs = Faq::all();
        return view('AdminDashboard.Managefaqs', compact('all_faqs'));
    }

    public function addfaq()
    {
        return view('AdminDashboard.FaqForm');
    }

    public function savefaqs(Request $request)
    {
        $faq = $request->all();
        Faq::Create($faq);
        return redirect('managefaq')->with('message', 'Faq Added Successfully');
    }

    public function deletefaqs($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        return redirect('managefaq')->with('message', 'Faq Deleted Successfully');
    }
    public function editfaqs($id)
    {
        // echo $id;exit;
        $editfaq = DB::table('faqs')->where('id', '=', $id)->get();
        return view('AdminDashboard.Editfaq', compact('editfaq'));
    }

    public function updatefaqs(Request $request, $id)
    {
        $question = $request->input('question');
        $answer = $request->input('answer');

        DB::table('faqs')
            ->where('id', $id)
            ->update(['question' => $question, 'answer' => $answer]);
        return redirect('managefaq')->with('message', 'Faq updated!!');
    }
    public function viewfaqs($id)
    {
        $view_faq = DB::table('faqs')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.viewfaq', compact('view_faq'));
    }

    public function managepolicy()
    {
        $policy = Privacy_policy::all();
        return view('AdminDashboard.ManagePrivacyPolicy', compact('policy'));
    }
    public function addpolicy()
    {
        return view('AdminDashboard.PrivacyPolicyForm');
    }
    public function savepolicy(Request $request)
    {
        $policy = $request->all();
        // $policy = $request->input('policy');
        // echo $policy;exit;
        // DB::table('privacy_policies')->insert(['policy'=>$policy]);
        Privacy_policy::Create($policy);
        return redirect('manageprivacypolicy')->with('message', 'New Policy Added Successfully!!');
    }

    public function editpolicy($id)
    {
        // echo $id;exit;
        $editpolicy = DB::table('privacy_policies')->where('id', $id)->get();
        return view('AdminDashboard.EditPolicyForm', compact('editpolicy'));
    }

    public function updatepolicy(Request $request, $id)
    {
        $heading = $request->input('heading');
        $policy = $request->input('policy');

        DB::table('privacy_policies')
            ->where('id', $id)
            ->update(['heading' => $heading, 'policy' => $policy]);
        return redirect('manageprivacypolicy')->with('message', 'Policy updated!!');
    }

    public function deletepolicy($id)
    {
        // echo $id;exit
        DB::table('privacy_policies')->where('id', $id)->delete();
        return redirect('manageprivacypolicy')->with('message', 'Policy Deleted!!');
    }

    public function viewpolicy($id)
    {

        $view_policy = DB::table('privacy_policies')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.ViewPrivacyPolicy', compact('view_policy'));
    }

    public function ViewApply($id)
    {
        $ApplyForm = ApplyForm::where('id', $id)->first();
        return view('AdminDashboard.ApplyJobView', compact('ApplyForm'));
    }
    public function list()
    {
        return view('AdminDashboard.list');
    }

    public function Download(Request $request, $resume)
    {
        $apply_form = ApplyForm::find($resume);
        return response()->download(public_path($apply_form->resume));
    }

    public function newsletter(Request $request)
    {
        $data = $request->all();
        Newsletter::Create($data);
        return redirect()->back()->with('success', 'Thank You For Subscribe');
    }



    public function ManageQuestionnaire()
    {
        $all_questionaire = Questionnaire::all();
        return view('AdminDashboard.ManageQuestionnaire', compact('all_questionaire'));
    }
    public function addquestionnaire()
    {
        return view('AdminDashboard.AddQuestionnaire');
    }
    public function savequestionnaire(Request $request)
    {
        // dd($request->all());
        // $data = $request->all();
        // echo "<pre>";
        // print_r($data);exit;
        // Questionnaire::create($data);
        // return redirect('home/Questionnaire')->with('message', 'Questionnaire Added!');


        $objQuestionnaire = new Questionnaire();
        $objQuestionnaire->fld_cat = $request->fld_cat;
        $objQuestionnaire->type = $request->type;
        $objQuestionnaire->fld_name = $request->fld_name;
        $objQuestionnaire->fld_type = $request->fld_type;
        $objQuestionnaire->placeholder = $request->placeholder;
        $objQuestionnaire->input_name = $request->input_name;

        if ($objQuestionnaire->save()) {
            return redirect('home/Questionnaire')->with('message', 'Questionnaire Added!');
        }
    }
    public function editquestionnaire($id)
    {
        $questionnaire = DB::table('questionnaires')
            ->where('id', $id)
            ->get();
        return view('AdminDashboard.editQuestionnaire', compact('questionnaire'));
    }
    public function updatequestionnaire(Request $request, $id)
    {
        // echo $id;exit;
        $fld_cat = $request->input('fld_cat');
        $fld_name = $request->input('fld_name');
        $type = $request->input('type');
        $fld_type = $request->input('fld_type');
        $placeholder = $request->input('placeholder');
        $input_name = $request->input('input_name');

        $folio = DB::table('questionnaires')
            ->where('id', $id)
            ->update(['fld_cat' => $fld_cat, 'fld_name' => $fld_name, 'fld_type' => $fld_type, 'placeholder' => $placeholder, 'input_name' => $input_name, 'type' => $type]);
        if ($folio) {
            return redirect('home/Questionnaire')->with('message', 'Questionnaire updated!');
        }
    }
    public function deletequestionnaire($id)
    {
        $delete_questionnaire = DB::table('questionnaires')->where('id', $id)->delete();
        return redirect('home/Questionnaire')->with('message', 'Questionnaire Deleted!');
    }

    public function questionnaireFormSend()
    {
        return view('questionaire-form');
    }

    public function ManageQuestionnaireDetails(Request $request)
    {
        $all_questionaire_dtl = QuestionnaireDetail::all();
        $data_dtls = json_decode($all_questionaire_dtl, true);
        $data =  json_decode($data_dtls[0]['store_data']);
        return view('AdminDashboard.ManageQuestionnaireDetails', compact('data'));
    }
}
