<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Testimonial;
use App\Models\Contact_details;
use App\Models\Job_opening;
use App\Models\Footer_scroll_image;
use App\Models\Home;
use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Social;
use App\Models\Profile;
use App\Models\Card;
use App\Models\Introduction;
use App\Models\Blog_comment;
use App\Models\Faq;
use App\Models\Aboutservice;
use App\Models\QuestionnaireDetail;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionnaireForm;
use Illuminate\contract\Mailer;
use App\Mail\Questionnaire;
use App\Models\ProfileDetail;
use Illuminate\Support\Facades\DB;
use PDF;



class HomeController extends Controller
{
    public function index()
    {
        $portfolio = DB::table('portfolios')->latest()->take(6)->get();
        $all_contents =  DB::table('profiles')
            ->get();
        //     echo"<pre>";
        //     print_r($all);exit;
        $all_client =  DB::table('clients')
            ->where('status', '=', 1)
            ->get();
        $section2imgs =  DB::table('homes')
            ->where('status', '=', 1)
            ->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'home_page')
            ->get();

        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();

        $contact_details = DB::table('contact_details')->get();
        $social_media = DB::table('socials')->get();
        $profile = DB::table('profiles')->get();
        $cards = DB::table('cards')->get();
        $siteintro = DB::table('introductions')->latest()->first();
        return view('index', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'section2imgs', 'all_client', 'all_contents', 'portfolio', 'social_media', 'profile', 'cards', 'siteintro'));
    }

    public function aboutus()
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'about')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('about-us', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'social_media'));
    }

    public function service()
    {
        $all_services = DB::table('services')
            ->get();

        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'services')
            ->get();

        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        $service_about = DB::table('aboutservices')->get();
        return view('services', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'all_services', 'social_media', 'service_about'));
    }

    public function portfo()
    {
        $portfolio = DB::table('portfolios')
            ->orderBy("id", "desc")
            ->where('status', '=', '1')
            ->where('portfolio_for', '!=', 'flyer')->where('portfolio_for', '!=', 'logo')->where('portfolio_for', '!=', 'mobile')
            ->get();
        $port_wordpress =  Portfolio::where('portfolio_for', 'LIKE', '%' . 'wordpress' . '%')->where('status', '=', '1')->get();
        $port_yii =  Portfolio::where('portfolio_for', 'LIKE', '%' . 'yii' . '%')->where('status', '=', '1')->get();
        $port_react =  Portfolio::where('portfolio_for', 'LIKE', '%' . 'react' . '%')->where('status', '=', '1')->get();
        $port_phalcon =  Portfolio::where('portfolio_for', 'LIKE', '%' . 'phalcon' . '%')->where('status', '=', '1')->get();
        $port_laravel = Portfolio::where('portfolio_for', 'LIKE', '%' . 'laravel' . '%')->where('status', '=', '1')->get();

        //  WHERE portfolio_for CONTAINS 'word1 word2 word3'

        $port_flyer = DB::table('portfolios')->where('portfolio_for', '=', 'flyer')->get();
        $port_logo = DB::table('portfolios')->where('portfolio_for', '=', 'logo')->get();
        $port_mobile = DB::table('portfolios')->where('portfolio_for', '=', 'mobile')->get();
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'portfolio')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        return view('portfolio', compact('portfolio', 'banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'portfolio', 'port_wordpress', 'port_yii', 'port_react', 'port_phalcon', 'social_media', 'port_laravel', 'port_flyer', 'port_logo', 'port_mobile'));
    }
    public function portfolioView($id)
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'portfolio')
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $view_port = DB::table('portfolios')
            ->where('id', '=', $id)
            ->get();

        $portfolio = Portfolio::find($id);
        $portfolioDetails = Portfolio::where('id', $portfolio->id)->where('portfolio_for', $portfolio->portfolio_for)->first();


        $max = Portfolio::where('portfolio_for', '<>',  'logo')->where('portfolio_for', '<>',  'flyer')->where('portfolio_for', '<>',  'mobile')->where('id', '<', $id)->orderBy('id', 'desc')->first();
        $min = Portfolio::where('portfolio_for', '<>',  'logo')->where('portfolio_for', '<>',  'flyer')->where('portfolio_for', '<>',  'mobile')->where('id', '>', $id)->orderBy('id', 'asc')->first();




        $social_media = DB::table('socials')->get();
        $related_projects =  Portfolio::where('portfolio_for', 'LIKE', '%' . $portfolio->portfolio_for . '%')->get();
        //dd($related_projects);
        return view('portfolio_view', compact('banner', 'contact_details', 'footr_scrl_img', 'view_port', 'social_media', 'related_projects', 'portfolio', 'portfolioDetails', 'max', 'min'));
    }
    public function clients()
    {
        $all_client =  DB::table('clients')
            ->where('status', '=', 1)
            ->get();
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'clients')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        return view('clients', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'all_client', 'social_media'));
    }
    public function viewclient($id)
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'clients')
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $client_view = DB::table('clients')->where('id', $id)->get();
        $social_media = DB::table('socials')->get();

        return view('clientview', compact('contact_details', 'footr_scrl_img', 'banner', 'client_view', 'social_media'));
    }
    public function designdemo()
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'design_demo')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $design_demo = DB::table('demos')->get();
        $social_media = DB::table('socials')->get();

        return view('design-demo', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'design_demo', 'social_media'));
    }
    public function career()
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'careers')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('careers', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'social_media'));
    }
    public function contactus()
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'contact')
            ->get();
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('contact-us', compact('banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'social_media'));
    }
    public function jobapply()
    {
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();

        $jobs = DB::table('job_openings')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();

        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('job-apply', compact('contact_details', 'jobs', 'all_testimonial', 'footr_scrl_img', 'social_media'));
    }
    public function getjobdetails()
    {
        $id = $_POST['id'];
        $job_apply = DB::table('job_openings')->where('id', $id)->get();
        echo $job_apply;
    }
    public function contactform()
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('contact-form', compact('contact_details', 'footr_scrl_img', 'social_media'));
    }

    public function questionnaireForm(Request $request)
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        return view('questionaire-form', compact('contact_details', 'footr_scrl_img', 'social_media'));
    }

    public function services_page($id)
    {
        $all_services = DB::table('services')
            ->where('id', '=', $id)
            ->get();

        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'services')
            ->get();

        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('services_view', compact('all_services', 'banner', 'all_testimonial', 'contact_details', 'footr_scrl_img', 'social_media'));
        // return view('software Design',array('id'=> $id));
    }
    public function termsandconditions()
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('terms-and-conditions', compact('contact_details', 'footr_scrl_img', 'social_media'));
    }
    public function faq()
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        $faqs = DB::table('faqs')->get();

        return view('faq', compact('contact_details', 'footr_scrl_img', 'social_media', 'faqs'));
    }
    public function sitemap()
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('site-map', compact('contact_details', 'footr_scrl_img', 'social_media'));
    }
    public function feedback()
    {
        $banner = DB::table('banners')
            ->where('status', '=', 1)->where('banner_for', '=', 'feedback')
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();

        return view('feedback', compact('contact_details', 'footr_scrl_img', 'banner', 'social_media'));
    }
    public function blog()
    {
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $all_blog = DB::table('blogs')->get();
        $social_media = DB::table('socials')->get();
        $recent_blogs = DB::table('blogs')->latest()->take(3)->get();
        return view('blog', compact('contact_details', 'footr_scrl_img', 'all_testimonial', 'all_blog', 'recent_blogs', 'social_media'));
    }
    public function blogview($id)
    {
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $read_blog = DB::table('blogs')->where('id', $id)->get();
        $all_blog = DB::table('blogs')->get();
        $recent_blogs = DB::table('blogs')->latest()->take(3)->get();
        $social_media = DB::table('socials')->get();
        $blog_comment = DB::table('blog_comments')->where('blog_id', $id)->get();
        $count_comment = Blog_comment::where('blog_id', $id)->count();
        return view('blog-inner', compact('contact_details', 'footr_scrl_img', 'all_testimonial', 'read_blog', 'social_media', 'all_blog', 'blog_comment', 'count_comment', 'recent_blogs'));
    }
    public function blogcomment(Request $request, $id)
    {
        $data = $request->all();
        $blog_id = $id;
        $data['blog_id'] = $blog_id;
        Blog_comment::create($data);
        return redirect('blog-view/' . $id);
    }
    public function privacypolicy()
    {
        // echo "Alok";exit;
        $all_testimonial = DB::table('testimonials')
            ->where('status', '=', 1)
            ->get();
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        $privacypolicy = DB::table('privacy_policies')->get();

        return view('privacy-policy', compact('contact_details', 'footr_scrl_img', 'all_testimonial', 'social_media', 'privacypolicy'));
    }
    public function profiledetailform(Request $request)
    {
        $ProfileData  = new ProfileDetail;
        $ProfileData->name = $request->name;
        $ProfileData->email = $request->email;
        $ProfileData->phone = $request->phone;
        $ProfileData->msg = $request->msg;
        $ProfileData->save();
        // dd($ProfileData);
        $data  = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'msg' => $request->msg
        );
        Mail::send('emails.ProfileDetailMails', $data, function ($message) use ($request) {
            $message->to($request->email, 'Maastrix')
                ->subject('Confirmation Mail From Maastrix Solution' . $request->name);
            $message->from('infoddd@maastrixsolutions.com');
        });
        return response()->json(["status" => true, 'msg' => "Thank you! Your Message submitted successfully."]);
        // return redirect('index')->with('message','New Policy Added Successfully!!');
    }

    public function changeformdata(Request $request)
    {
        // $objgetformdata = Questionnaire::where('type', '=', 'website design')->get();
        $objgetformdata =  DB::table('questionnaires')->where('type', 'LIKE', '%' . 'website design' . '%')->get();

        // return response()->json(["status" => true, 'objgetformdata' => $objgetformdata]);
        return response()->json($objgetformdata);
    }

    public function questionnaireFormAll(Request $request)
    {
        $contact_details = DB::table('contact_details')->get();
        $footr_scrl_img =  DB::table('footer_scroll_images')
            ->where('status', '=', 1)
            ->get();
        $social_media = DB::table('socials')->get();
        $field_details = DB::table('questionnaires')->where('type', (string) $request->type)->get();
        return view('questionaire-form-all', compact('contact_details', 'footr_scrl_img', 'social_media', 'field_details'));
    }



    public function questionnaireFormSend(Request $request)
    {

        $cur_date = date('Y-m-d');
        $data = $request->all(); //json is they key it is sent in
        $ques_data = new QuestionnaireDetail();
        $ques_data->store_data = json_encode($data, true);
        $ques_data->save();
        $data = [
            'val' => $data,
        ];

        $pdf =  PDF::loadView('pdf.questionnaire', $data);
        $pdf->setPaper('A4', 'landscape');
        $content = $pdf->output();
        $x = public_path("questionnarie/questionnarie_" . $cur_date . ".pdf");
        file_put_contents($x, $content);

        $body = [
            'body' => 'Thank You For Showing Interest,We will Contact You Soon...',
            'pdf_path' => public_path("questionnarie/questionnarie_" . $cur_date . ".pdf")
        ];

        Mail::to($request->email, $request->contact_name)->send(new Questionnaire($body));
        // return redirect()->back()->with('success', 'Thanks for Contacting us.We will contact you soon');
        // return response()->json(["status" => true, 'success' => "Thanks for Contacting us.We will contact you soon"]);
        return redirect('/questionaire-form')->with('success', 'Thanks for Contacting us.We will contact you soon');
        // return redirect()->route('questionnaire-FormSend')->with('success', 'Thanks for Contacting us.We will contact you soon');

    }
}
