<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Client;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{

    public function AdminDashboard()
    {
        return view('backend.dashboard');
    }




    public function AddEducation(){
        return view('backend.addeducation');
    } 
    
    
    public function SaveEducation(Request $request){

        Education::insert(
            [
                'user_id'=>Auth::user()->id,
                'institution'=>$request->institution,
                'degree'=>$request->degree,
                'field_of_study'=>$request->field_of_study	,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'description'=>$request->description
            ]
            );
            return redirect()->back(); 
    }   

    public function SaveExperience(Request $request){

        Experience::insert(
            [
                'user_id'=>Auth::user()->id,
                'job_title'=>$request->job_title,
                'company_name'=>$request->company_name,
                'location'=>$request->location,
                'technologies_used'=>json_encode($request->technologies_used),
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'description'=>$request->description
            ]
            );
            return redirect()->back(); 
    }   
        public function SaveSkill(Request $request){

        Skill::insert(
            [
                'user_id'=>Auth::user()->id,
                'name'=>$request->name,
                'proficiency'=>$request->proficiency,
                'years_of_experience'=>$request->years_of_experience,
                'created_at' => now(), // Current date and time
                'updated_at' => now(), // Current date and time
            ]
            );
            // return redirect()->back(); 
            return redirect()->route('showskill'); 

    } 
    
    
        public function SaveAward(Request $request){

            Award::insert(
                [
                    'user_id'=>Auth::user()->id,
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'date_received'=>$request->date_received,
                    'organization'=>$request->organization,
                    'image'=>$request->image,
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]
                );
                // return redirect()->back(); 
                return redirect()->route('showaward'); 

        } 
        public function SaveClient(Request $request){

                    Client::insert(
                        [
                            'user_id'=>Auth::user()->id,
                            'fullname'=>$request->fullname,
                            'email'=>$request->email,
                            'phone'=>$request->phone,
                            'company'=>$request->company,
                            'company_website'=>$request->company_website,
                            'image'=>$request->image,
                            'created_at' => now(), // Current date and time
                            'updated_at' => now(), // Current date and time
                        ]
                        );
                         //return redirect()->back(); 
                         return redirect()->route('showclient'); 

                } 


                public function SaveService(Request $request){

                    Service::insert(
                        [
                            'user_id'=>Auth::user()->id,
                            'title'=>$request->title,
                            'description'=>$request->description,
                            'price'=>$request->price,
                            'duration'=>$request->duration,
                            'image'=>$request->image,
                            'created_at' => now(), // Current date and time
                            'updated_at' => now(), // Current date and time
                        ]
                        );
                         //return redirect()->back(); 
                       return redirect()->route('showservice'); 

                } 
                public function SaveSettings(Request $request){

                                    Setting::insert(
                                        [
                                            'agency_name'=>$request->agency_name,
                                            'logo'=>$request->logo,
                                            'address'=>$request->address,
                                            'phone'=>$request->phone,
                                            'email'=>$request->email,
                                            'description'=>$request->description,
                                            'created_at' => now(), // Current date and time
                                            'updated_at' => now(), // Current date and time
                                        ]
                                        );
                                        return redirect()->back(); 
                                    

                                } 








    
    
    public function ShowEducation(){

        $edus=Education::where('user_id',Auth::user()->id)->get();
        return view('backend.showeducations',compact('edus'));
    } 
    public function ShowExperience(){

        $exps=Experience::where('user_id',Auth::user()->id)->get();
        return view('backend.showexperiences',compact('exps'));
    } 

    public function ShowSkill(){

            $skils=Skill::where('user_id',Auth::user()->id)->get();
            return view('backend.showskills',compact('skils'));
        }  
        
        public function ShowAward(){

            $awds=Award::where('user_id',Auth::user()->id)->get();
            return view('backend.showawards',compact('awds'));
        } 
        
        public function ShowClient(){

            $clients=Client::where('user_id',Auth::user()->id)->get();
            return view('backend.showclients',compact('clients'));
        } 
        public function ShowService(){

            $servs=Service::where('user_id',Auth::user()->id)->get();
            return view('backend.showservices',compact('servs'));
                } 



        
    



















    public function AddExperience(){
        return view('backend.addexperience');
    }


    public function AddSkill(){
        return view('backend.addskill');
    }


    public function AddAward(){
        return view('backend.addaward');
    }


    public function AddService(){
        return view('backend.addservice');
    }


    public function AddClient(){
        return view('backend.addclient');
    }


    public function AddProject(){
        return view('backend.addproject');
    }

    public function AddObjective(){
        return view('backend.addobjective');
    }


    public function GeneralSettings(){
        return view('backend.generalsettings');
    }







    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
