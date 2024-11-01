<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
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
    
    
    public function ShowEducation(){

        $edus=Education::where('user_id',Auth::user()->id)->get();
        return view('backend.showeducations',compact('edus'));
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
