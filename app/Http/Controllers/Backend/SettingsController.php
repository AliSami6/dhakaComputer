<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;
use App\Models\StudentEnrollment;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\CreateRequest;

class SettingsController extends Controller
{
    public function allMessages(){
        return view('backend.pages.settings.all_messages');
    }
    public function ProfileInfo(){
        return view('backend.pages.profiles.profile');
    }
    public function SettingsInfo(){
        $websettings = WebsiteInfo::first();
        return view('backend.pages.settings.index',compact('websettings'));
    }
    public function SettingsDataSave(CreateRequest $request){
      
        $websettings = WebsiteInfo::first();
        if ($request->hasFile('logo')) {
            $Logo_image = $this->image_updated($request->file('logo'), 'uploaded_files/website/logo/',$websettings->logo);
        } 
        else {
           $Logo_image = $websettings->logo;
        }
        if ($request->hasFile('favicon')) {
           $favicon_image = $this->image_updated($request->file('favicon'), 'uploaded_files/website/favicon/',$websettings->favicon);
        } 
        else {
            $favicon_image = $websettings->favicon;
        }
        if ($request->hasFile('banner')) {
            $banner_image = $this->image_updated($request->file('banner'), 'uploaded_files/website/banner/',$websettings->banner);
        } 
        else {
            $banner_image = $websettings->banner;
        }
       
        $websettings->update([
            'site_name'=>$request->site_name,
            'site_email'=>$request->site_email,
            'address'=>$request->address,
            'website_title'=>$request->website_title,
            'website_description'=>$request->website_description,
            'banner'=>  $banner_image,
            'logo'=>  $Logo_image,
            'favicon'=>  $favicon_image 
        ]);
        return redirect()->back()->with('success','Websettings Updated !'); 
    }
    public function ReferralSystem(){
        $referral = StudentEnrollment::select(
                        "student_enrollments.id",
                        "student_enrollments.referral_code",
                        "student_enrollments.student_id",
                        "student_enrollments.referrer_id",
                        "students.studentsName as student_name",
                        "wallets.id as walletID",
                        "wallets.points as point",
                        "wallets.status as wallet_status",
                        "wallets.created_at as create_date"
                    )
                    ->join("users", "student_enrollments.referrer_id", "=", "users.id")
                    ->join("wallets", "wallets.user_id", "=", "users.id")
                    ->join("students", "student_enrollments.student_id", "=", "students.id")
                    ->get();
        return view('backend.pages.referral_system.index',['referral'=>$referral]);
    }
}