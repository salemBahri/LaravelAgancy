<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
