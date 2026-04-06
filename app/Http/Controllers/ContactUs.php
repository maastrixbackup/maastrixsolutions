<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\Contact;
use App\Mail\ContactForm;
use App\Mail\JobApplyForm;
use Illuminate\contract\Mailer;
use PDF;
use App\Models\Contact_u;
use App\Models\Get_a_Quote;
use App\Models\ApplyForm;


class ContactUs extends Controller
{
    //
    public function index(){
        return view('contact-us');
    }
    public function send(Request $request){
        $Contact_u  = new Contact_u;
        $Contact_u->fullname=$request->fullname;
        $Contact_u->email=$request->email;
        $Contact_u->Pnum=$request->Pnum;
        $Contact_u->Cname=$request->Cname;
        $Contact_u->subject=$request->subject;
        $Contact_u->Weblink=$request->Weblink;
        $Contact_u->msg=$request->msg;
        $Contact_u->save();
      
        $data  = array(
            'name_data'=>$request->fullname,
            'email_data'=>$request->email,
            'Pnum_data'=>$request->Pnum,
            'Cname_data'=>$request->Cname,
            'subject_data'=>$request->subject,
            'Weblink_data'=>$request->Weblink,
           'msg_data'=>$request->msg
        );
    Mail::send('emails.sendMails', $data, function($message) use ($request){
        $message->to('maaskhushi22@gmail.com','Maastrix')
        ->subject('Maastrix:: Contact us Submission' . $request->name);
        $message->from('maaskhushi22@gmail.com');
        
    });
    return redirect()->back()->with('success', 'Thanks for Contacting us.We will contact you soon');
    }

    public function ListSend(){
        $Contact_u=Contact_u::all();
        
        return view('ContactUsList',compact('Contact_u'));
    }
    

    public function contactFormSend(Request $request){
   
            $Get_a_Quote  = new Get_a_Quote;
            $Get_a_Quote->Username=$request->Username;
            $Get_a_Quote->email=$request->email;
            $Get_a_Quote->PhoneNum=$request->PhoneNum;
            $Get_a_Quote->CName=$request->CName;
            $Get_a_Quote->Subject=$request->Subject;
            $Get_a_Quote->Money=$request->radio;
            $Get_a_Quote->msgs=$request->msgs;
            $Get_a_Quote->save();
            
        
        $data  = array(
            'Username_data'=>$request->Username,
            'email_data'=>$request->email,
            'PhoneNum_data'=>$request->PhoneNum,
            'CName_data'=>$request->CName,
            'Subject_data'=>$request->Subject,
            'radio_data'=>$request->radio,
           'msgs_data'=>$request->msgs
        );
    Mail::send('emails.sendMailsContactForm', $data, function($message) use ($request){
        $message->to('maaskhushi22@gmail.com','Maastrix')
        ->subject('Laravel email with Jquery validation' . $request->name);
        $message->from('maaskhushi22@gmail.com');
      
      
    });
    return redirect()->back()->with('success', 'Thank you! We got your Query.');
    }

    public function ListcontactFormSend(){
        $Get_a_Quote=Get_a_Quote::all();
        return view('GetAQuoteList',compact('Get_a_Quote'));
    }

    public function SendApply(Request $request){

        $ApplyForm  = new ApplyForm;
        $ApplyForm->fname=$request->fname;
        $ApplyForm->email=$request->email;
        $ApplyForm->lname=$request->lname;
        $ApplyForm->ContactNum=$request->ContactNum;
   
        $ApplyForm->DOB=$request->DOB;
        $ApplyForm->gender=$request->gender;
        $ApplyForm->address=$request->address;
        $ApplyForm->country=$request->country;
        $ApplyForm->state=$request->state;
        $ApplyForm->city=$request->city;
        $ApplyForm->Zip=$request->Zip;
        $ApplyForm->PrimarySkills=$request->PrimarySkills;
        $ApplyForm->SecondarySkills=$request->SecondarySkills;
        $ApplyForm->experience=$request->experience;
        $ApplyForm->CurrentEmployer=$request->CurrentEmployer;

        $ApplyForm->qualification=$request->qualification;
        $ApplyForm->resume=$request->resume;

  
        $fileName = time().'.'.$ApplyForm->resume->getClientOriginalExtension();  
   
        $request->resume->move('uploads', $fileName);
        $ApplyForm->save();

        $data  = array(
            'fname_data'=>$request->fname,
            'lname_data'=>$request->lname,
            'email_data'=>$request->email,
            'ContactNum_data'=>$request->ContactNum,
            'DOB_data'=>$request->DOB,
            'gender_data'=>$request->gender,
            'address_data'=>$request->address,
            'country_data'=>$request->country,
            'state_data'=>$request->state,
            'city_data'=>$request->city,
            'Zip_data'=>$request->Zip,
            'PrimarySkills_data'=>$request->PrimarySkills,
            'SecondarySkills_data'=>$request->SecondarySkills,
            'experience_data'=>$request->experience,
            'CurrentEmployer_data'=>$request->CurrentEmployer,
            'qualification_data'=>$request->qualification,
         
            'resume_data'=>$request->file('resume')
           
        );
       
       
    Mail::send('emails.JobApplyForm', $data, function($message) use($data){
        $message->to('maaskhushi22@gmail.com','Maastrix')
        ->subject('Laravel email with Jquery validation');
       
        $message->from('maaskhushi22@gmail.com');
        
    });
    return redirect()->back()->with('success', 'We got your Information. We will give a respose to you soon');
    }
    public function ListSendApply(){
        $ApplyForm=ApplyForm::all();
        return view('CarrersListApplyJob',compact('ApplyForm'));
    }

}

