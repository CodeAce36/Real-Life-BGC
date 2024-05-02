<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Announcement; 
use App\Models\Applicant;
use App\Models\ApplicantsAcademicInformation;
use App\Models\ApplicantsPersonalInformation;
use Illuminate\Support\Facades\DB; 
use App\Notifications\StatusUpdateNotification; 
use App\Models\ApplicantsAcademicInformationChoice;
use App\Models\ApplicantsAcademicInformationGrade;
use App\Models\Member;
use App\Models\Notification;
use App\Models\Requirement;
use App\Models\ContentEmail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'content' => 'required',
        ]);
    
        $data = [
            'subject' => $request->subject,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'content' => $request->content
        ];
    
        Mail::send('email-template', $data, function ($message) use ($data) {
            Log::info('Sender Name (Before Sending Email): ' . $data['first_name'] . ' ' . $data['last_name']);
            Log::info('Sender Email (Before Sending Email): ' . $data['email']);
        
            $senderName = $data['first_name'] . ' ' . $data['last_name'];
            
            $message->to('reallifebgc@gmail.com')
                ->subject($data['subject'])
                ->from($data['email'], $senderName)
                ->replyTo($data['email'], $senderName);
        });
        
        
        return back()->with(['message' => 'Your message has been sent. Thank you!']);
    }    

      //email page
      public function emailShow()
    {
        $title = 'Email';

        $contentEmail = ContentEmail::first();
        $under_review_data = $contentEmail ? $contentEmail->under_review : '';
        $shortlisted_data = $contentEmail ? $contentEmail->shortlisted : ''; 
        $interview_data = $contentEmail ? $contentEmail->interview : ''; 
        $house_visitation_data = $contentEmail ? $contentEmail->house_visitation : ''; 
        $decline_data = $contentEmail ? $contentEmail->decline : ''; 
        
        return view('admin.email.email', compact('title', 'under_review_data', 'shortlisted_data', 'interview_data', 'house_visitation_data', 'decline_data')); 
    }

    //under review email content 
      public function saveUnderReviewContent(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'under_review' => 'required', 
          ]);
      
          if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
          }
      
          $content_email = ContentEmail::first();
      
          if ($content_email) {
              $content_email->under_review = $request->input('under_review');
              $content_email->save();
          } else {
              $content_email = new ContentEmail();
              $content_email->under_review = $request->input('under_review');
              $content_email->save();
          }
      
          $request->session()->flash('success', 'Under Review Content Saved Successfully!');
          return redirect()->route('admin.email.email')->with('under_review_data', $request->input('under_review'));
      }

      //shortlisted email content 
      public function saveShortlistedContent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'shortlisted' => 'required', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $content_email = ContentEmail::first();

        if ($content_email) {
            $content_email->shortlisted = $request->input('shortlisted');
            $content_email->save();
        } else {
            $content_email = new ContentEmail();
            $content_email->shortlisted = $request->input('shortlisted');
            $content_email->save();
        }

        $request->session()->flash('success', 'Shortlisted Content Saved Successfully!');
        return redirect()->route('admin.email.email')->with('shortlisted_data', $request->input('shortlisted'));
    }

    //For interview email content
    public function saveInterviewContent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'interview' => 'required', 
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $content_email = ContentEmail::first();

        if ($content_email) {
            $content_email->interview = $request->input('interview');
            $content_email->save();
        } else {
            $content_email = new ContentEmail();
            $content_email->interview = $request->input('interview');
            $content_email->save();
        }
        $request->session()->flash('success', 'Interview Content Saved Successfully!');
        return redirect()->route('admin.email.email')->with('interview_data', $request->input('interview'));
    }

     //For interview email content
     public function saveHouseVisitationContent(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'house_visitation' => 'required', 
         ]);
 
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
 
         $content_email = ContentEmail::first();
 
         if ($content_email) {
             $content_email->house_visitation = $request->input('house_visitation');
             $content_email->save();
         } else {
             $content_email = new ContentEmail();
             $content_email->house_visitation = $request->input('house_visitation');
             $content_email->save();
         }
         $request->session()->flash('success', 'House Visitation Content Saved Successfully!');
         return redirect()->route('admin.email.email')->with('house_visitation_data', $request->input('house_visitation'));
     }

      //For declined email content
      public function saveDeclineContent(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'decline' => 'required', 
          ]);
  
          if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
          }
  
          $content_email = ContentEmail::first();
  
          if ($content_email) {
              $content_email->decline = $request->input('decline');
              $content_email->save();
          } else {
              $content_email = new ContentEmail();
              $content_email->decline = $request->input('decline');
              $content_email->save();
          }
          $request->session()->flash('success', 'Declined Content Saved Successfully!');
          return redirect()->route('admin.email.email')->with('decline_data', $request->input('decline'));
      }
  }