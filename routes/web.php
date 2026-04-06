<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('index', function () {
//     return view('index');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('about-us',[HomeController::class,'aboutus']);
Route::get('services',[HomeController::class,'service']);
Route::get('portfolio',[HomeController::class,'portfo']);
Route::get('portfolio-view/{id}',[HomeController::class,'portfolioView']);

Route::get('clients',[HomeController::class,'clients']);
Route::get('design-demo',[HomeController::class,'designdemo']);
Route::get('careers',[HomeController::class,'career']);
Route::get('contact-us',[HomeController::class,'contactus']);
Route::get('job-apply',[HomeController::class,'jobapply']);
Route::get('contact-form',[HomeController::class,'contactform']);

Route::get('questionaire-form',[HomeController::class,'questionnaireForm']);
Route::get('terms-and-conditions',[HomeController::class,'termsandconditions']);
Route::get('faq',[HomeController::class,'faq']);
Route::get('sitemap',[HomeController::class,'sitemap']);
Route::get('feedback',[HomeController::class,'feedback']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-view/{id}',[HomeController::class,'blogview']);
Route::post('blog-comment/{id}',[HomeController::class,'blogcomment']);
Route::post('getjobdetail',[HomeController::class,'getjobdetails']);
Route::get('privacy-policy',[HomeController::class,'privacypolicy']);
Route::get('client-view/{id}',[HomeController::class,'viewclient']);
Route::post('profile-detail',[HomeController::class,'profiledetailform']);
Route::post('change-formdata',[HomeController::class,'changeformdata']);
Route::post('questionaire-form-all',[HomeController::class,'questionnaireFormAll']);
Route::post('questionnaire-FormSend',[HomeController::class,'questionnaireFormSend']);


    Route::get('/migrate', function () {
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');
        Artisan::call('config:cache');
        return 'Command worked successfully';
        // return what you want
    });

//Routing for services view start
Route::get('Services_view/{id}',[HomeController::class,'services_page']);
//Routing for services end


Route::get('404-error', function () {
    return view('404-error');
});

// Route::get('about-us', function () {
//     return view('about-us');
// });

Route::get('blog-inner', function () {
    return view('blog-inner');
});

// Route::get('careers', function () {
//     return view('careers');
// });

// Route::get('clients', function () {
//     return view('clients');
// });

// Route::get('contact-form', function () {
//     return view('contact-form');
// });
Route::post('contact-form/contactFormSend',[AdminController::class,'contactFormSend'])->name('contactForm');

// Route::get('contact-form',[ContactUs::class,'contactFormSend']);

Route::post('newsletter',[AdminController::class,'newsletter']);

// Route::get('contact-us', function () {
//     return view('contact-us');
// });
Route::post('contact-us/send',[AdminController::class,'send'])->name('contact');



// Route::get('job-apply', function () {
//     return view('job-apply');
// });
Route::post('job-apply/SendApply',[AdminController::class,'SendApply']);


// Route::get('contact-us',[ContactUs::class,'index']);

// Route::view('contact-us','contact-us');

// Route::get('design-demo', function () {
//     return view('design-demo');
// });

// Route::get('faq', function () {
//     return view('faq');
// });

// Route::get('job-apply', function () {
//     return view('job-apply');
// });

// Route::get('portfolio', function () {
//     return view('portfolio');
// });

// Route::get('privacy-policy', function () {
//     return view('privacy-policy');
// });

// Route::get('services', function () {
//     return view('services');
// });

// Route::get('terms-and-conditions', function () {
//     return view('terms-and-conditions');
// });

// Route::get('services', function () {
//     return view('services');
// });


Route::get('ContactUsList',[AdminController::class,'ListSend']);

Route::get('GetAQuoteList',[AdminController::class,'ListcontactFormSend']);

Route::get('CarrersListApplyJob',[AdminController::class,'ListSendApply']);

// Route::get('ManageBanner',[AdminController::class,'ManageBanner']);

Route::get('ApplyJobView', function () {
    return view('ApplyJobView');
});
Route::get('/ApplyJobView/{id}',[AdminController::class,'ViewApply']);

Route::get('list',[AdminController::class,'list']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('dashboard',[AdminController::class,'dashboard']);
    Route::get('ContactUsList', function () {return view('ContactUsList');});
    Route::get('GetAQuoteList', function () {return view('GetAQuoteList');});
    Route::get('CarrersListApplyJob', function () {return view('CarrersListApplyJob'); });

    // All Banner Routes start
     Route::get('ManageBanner',[AdminController::class,'ManageBanner']);
     Route::get('AddBanner',[AdminController::class,'AddBannerForm']);
     Route::post('store', [AdminController::class, 'storeimage']);
     Route::post('updateBanner', [AdminController::class, 'update_banner']);
     Route::post('deleteBanner', [AdminController::class, 'delete_banner']);
     Route::get('editbanner/{id}', [AdminController::class, 'edit_banner']);
     Route::post('updatebanner/{id}', [AdminController::class, 'updatebanner']);
     Route::get('viewbanner/{id}', [AdminController::class, 'viewbanner']);
    // All Banner Routes end

    // All About Us  Routes start
    Route::get('manageaboutMaastrix',[AdminController::class,'AboutMaastrix']);
    Route::get('addaboutmaastrix',[AdminController::class,'aboutmaastrix']);



    // All About Us  Routes end


    // Report Card Route Start
     Route::get('Managecarddetails',[AdminController::class,'managecard']);
     Route::get('addcarddetails',[AdminController::class,'addcard']);
     Route::post('savecarddetails',[AdminController::class,'savecard']);
     Route::get('deletecard/{id}',[AdminController::class,'deletecard']);
     Route::get('editcard/{id}',[AdminController::class,'editcard']);
     Route::post('updatecard/{id}',[AdminController::class,'updatecard']);

    // Report Card Route End

    //site introduction Route Start
    Route::get('siteintroduction',[AdminController::class,'managesiteintro']);
    Route::get('addintroduction',[AdminController::class,'addintroduction']);
    Route::post('saveintroduction',[AdminController::class,'saveintroduction']);
    // Route::get('deletecard/{id}',[AdminController::class,'deletecard']);
    // Route::get('editcard/{id}',[AdminController::class,'editcard']);
    // Route::post('updatecard/{id}',[AdminController::class,'updatecard']);
    //site introduction Route End


    // All Testimonial Routes start
     Route::get('Testimonial',[AdminController::class,'Testimonial']);
     Route::get('AddTestimonial',[AdminController::class,'TestimonialForm']);
     Route::post('saveTestimonial', [AdminController::class, 'savetestimonial']);
     Route::post('Testimonialstatus', [AdminController::class, 'testimonial_status']);
     Route::get('edittestimonial/{id}', [AdminController::class, 'edittestimonial']);
     Route::post('updatetestimonial/{id}', [AdminController::class, 'updatetestimonial']);
     Route::get('deletetestimonial/{id}', [AdminController::class, 'deletetestimonial']);
    // All Testimonial Routes end

    //Routes for Manage Contact Details start
     Route::get('ManageContactDetails',[AdminController::class,'ManageContact']);
     Route::get('AddContact',[AdminController::class,'AddContactDetailsForm']);
     Route::post('SaveContact/{id}', [AdminController::class, 'savecontact']);
     Route::get('deletecontact/{id}', [AdminController::class, 'contactDelete']);
     Route::get('editcontact/{id}', [AdminController::class, 'ContactEdit']);
    //Routes for Manage Contact Details end

    //Route for Social media start
     Route::get('managesocialmedia',[AdminController::class,'managesocialmedia']);
     Route::post('savesocialmedia/{id}',[AdminController::class,'socialmediasave']);

    //Route for Social media end


    //Routes for Job Openings start
     Route::get('ManageJobOpening',[AdminController::class,'ManageJob']);
     Route::get('AddJob',[AdminController::class,'AddJobOpeningForm']);
     Route::post('savejob', [AdminController::class, 'savejob']);
     Route::post('updatejobstatus', [AdminController::class, 'update_job_status']);
     Route::get('deletejob/{id}', [AdminController::class, 'deletejob']);
     Route::get('editjob/{id}', [AdminController::class, 'editjob']);
     Route::post('updatejob/{id}', [AdminController::class, 'updatejob']);
     Route::get('viewjob/{id}', [AdminController::class, 'viewjob']);

    //Routes for Job Openings end

    //Routes for Footer image Scroll start
     Route::get('ManageScrollImage',[AdminController::class,'imagescroll']);
     Route::get('AddScrollImage',[AdminController::class,'scrollImageForm']);
     Route::post('Saveimage',[AdminController::class,'scrollimagesave']);
     Route::post('Scrollstatus', [AdminController::class, 'updatestatus']);
     Route::get('delete/{id}', [AdminController::class, 'deleteImage']);
    //Routes for Footer image Scroll end

    //Route for Home Page Management start
     Route::get('home/Section2',[AdminController::class,'homesection2']);
     Route::get('home/Section2/addContent',[AdminController::class,'addcontent']);
     Route::post('home/Section2/SaveContent',[AdminController::class,'saveContents']);
     Route::get('deletecontent/{id}',[AdminController::class,'deleteContents']);
     Route::get('editcontent/{id}',[AdminController::class,'editContents']);
     Route::post('updatecontent/{id}',[AdminController::class,'updateContents']);
     Route::get('viewcontent/{id}',[AdminController::class,'viewContents']);

        #Route For Section4 Start
        Route::get('home/WhyChooseUs',[AdminController::class,'whychoose']);
        Route::get('home/WhyChooseUs/Add',[AdminController::class,'addform']);
        Route::post('whychooseusSave',[AdminController::class,'savewhychoose']);
        Route::get('whychooseusdelete/{id}',[AdminController::class,'deletewhychoose']);
        Route::get('whychooseusview/{id}',[AdminController::class,'viewwhychoose']);
        Route::get('whychooseusedit/{id}',[AdminController::class,'editwhychoose']);
        Route::post('whychooseusupdate/{id}',[AdminController::class,'updatewhychoose']);

        #Route for section4 End
    //Route for Home Page Management end

    //Route For Services Start
    Route::get('services/about',[AdminController::class,'ServiceAbout']);
    Route::get('services/about/add',[AdminController::class,'ServiceAboutadd']);
    Route::post('services/about/save',[AdminController::class,'ServiceAboutsave']);


     Route::get('home/Services',[AdminController::class,'service']);
     Route::get('home/Services/add',[AdminController::class,'serviceadd']);
     Route::post('saveservice',[AdminController::class,'servicesave']);
     Route::get('deleteservice/{id}',[AdminController::class,'servicedelete']);
     Route::get('editservice/{id}',[AdminController::class,'editservice']);
     Route::post('updateservice/{id}',[AdminController::class,'updateservice']);
     Route::get('viewservice/{id}',[AdminController::class,'viewservice']);

    //Route For Services End

    //Routing for Portfolio  start
     Route::get('home/Portfolio',[AdminController::class,'ManageProtfolio']);
     Route::get('AddPortfolio',[AdminController::class,'addportfolio']);
     Route::post('savePortfolio',[AdminController::class,'saveportfolio']);
     Route::get('editPortfolio/{id}',[AdminController::class,'editportfolio']);
     Route::post('updatePortfolio/{id}',[AdminController::class,'updateportfolio']);
     Route::get('deleteportfolio/{id}',[AdminController::class,'deleteportfolio']);
     Route::get('viewportfolio/{id}',[AdminController::class,'viewsportfolio']);
    //Routing for Portfolio  End

    //Routing for Design Demo start
     Route::get('page/DesignDemo',[AdminController::class,'DesignDemo']);
     Route::get('DesignDemoAdd',[AdminController::class,'DesignDemoAdd']);
     Route::post('saveDesignDemo',[AdminController::class,'saveDesign']);
     Route::get('designdemo/{id}',[AdminController::class,'deleteDesign'])->name('designdemo_delete');
     Route::get('editdesigndemo/{id}',[AdminController::class,'editDesign']);
     Route::post('updatedesigndemo/{id}',[AdminController::class,'updateDesign']);

    //Routing for Design Demo start

    //Route for Clients Management start
     Route::get('home/Clients',[AdminController::class,'clients']);
     Route::get('AddClient',[AdminController::class,'addclients']);
     Route::post('clientsave',[AdminController::class,'saveclients']);
     Route::post('clientstatus',[AdminController::class,'statusClient']);
     Route::get('editclient/{id}',[AdminController::class,'editclient']);
     Route::post('updateclient/{id}',[AdminController::class,'updateclient']);
     Route::get('viewclient/{id}',[AdminController::class,'viewclient']);
    //Route for clients Management end

    // Route for blog Management start
     Route::get('blog-manage',[AdminController::class,'blogmanage']);
     Route::get('add-blog',[AdminController::class,'addblog']);
     Route::post('save-blog',[AdminController::class,'saveblog']);
     Route::get('edit-blog/{id}',[AdminController::class,'editblog']);
     Route::get('delete-blog/{id}',[AdminController::class,'deleteblog']);
     Route::get('view-blog/{id}',[AdminController::class,'viewblog']);
     Route::post('update-blog/{id}',[AdminController::class,'updateblog']);

    // Route for blog Management end

    // Route for FAQ Management start
    Route::get('managefaq',[AdminController::class,'faqmanage']);
    Route::get('addfaq',[AdminController::class,'addfaq']);
    Route::post('savefaq',[AdminController::class,'savefaqs']);
    Route::get('deletefaq/{id}',[AdminController::class,'deletefaqs']);
    Route::get('editfaq/{id}',[AdminController::class,'editfaqs']);
    Route::post('updatefaq/{id}',[AdminController::class,'updatefaqs']);
    Route::get('viewfaq/{id}',[AdminController::class,'viewfaqs']);

    // Route for FAQ Management End

    // Route for Privacy Policy Management start
    Route::get('manageprivacypolicy',[AdminController::class,'managepolicy']);
    Route::get('addprivacypolicy',[AdminController::class,'addpolicy']);
    Route::post('saveprivacypolicy',[AdminController::class,'savepolicy']);
    Route::get('editprivacypolicy/{id}',[AdminController::class,'editpolicy']);
    Route::post('updateprivacypolicy/{id}',[AdminController::class,'updatepolicy']);
    Route::get('deleteprivacypolicy/{id}',[AdminController::class,'deletepolicy']);
    Route::get('viewprivacypolicy/{id}',[AdminController::class,'viewpolicy']);


    // Route for Privacy Policy Management End

    Route::get('ContactUsList',[AdminController::class,'ListSend']);
    Route::get('GetAQuoteList',[AdminController::class,'ListcontactFormSend']);
    Route::get('CarrersListApplyJob',[AdminController::class,'ListSendApply']);
    Route::get('ApplyJobView', function () {return view('ApplyJobView');});
    Route::get('/ApplyJobView/{id}',[AdminController::class,'ViewApply']);

    Route::get('/Download/{resume}',[AdminController::class,'Download'])->name('download_file');

});

require __DIR__.'/auth.php';

