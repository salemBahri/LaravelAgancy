<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Client;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;



class BackendController extends Controller
{

    public function AdminDashboard()
    {
        return view('backend.dashboard');
    }




    public function AddEducation()
    {
        return view('backend.addeducation');
    }


    public function SaveEducation(Request $request)
    {

        Education::insert(
            [
                'user_id' => Auth::user()->id,
                'institution' => $request->institution,
                'degree' => $request->degree,
                'field_of_study' => $request->field_of_study,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description
            ]
        );
        return redirect()->route('showeducation');
    }










public function UpdateEducation(Request $request)
{
    //for test request
    // dd($request->all());
    $education = Education::where('user_id', Auth::user()->id)->first();

    if (!$education) {
        return redirect()->back()->with('error', 'Settings not found.');
    }

    $logo = $education->logo; // Retain the current logo by default

    

    // Update the settings
    $education->update([
                'institution' => $request->institution,
                'degree' => $request->degree,
                'field_of_study' => $request->field_of_study,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description,
                 'updated_at' => now(), 
    ]);

    return redirect()->back();
}






    public function deleteeducation($id){
        Education::findOrFail($id)->delete();
        return redirect()->route('showeducation');

    }


































    

    public function SaveExperience(Request $request)
    {

        Experience::insert(
            [
                'user_id' => Auth::user()->id,
                'job_title' => $request->job_title,
                'company_name' => $request->company_name,
                'location' => $request->location,
                'technologies_used' => json_encode($request->technologies_used),
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'description' => $request->description
            ]
        );
        return redirect()->route('showexperience');
    }
    public function SaveSkill(Request $request)
    {

        Skill::insert(
            [
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'proficiency' => $request->proficiency,
                'years_of_experience' => $request->years_of_experience,
                'created_at' => now(), // Current date and time
                'updated_at' => now(), // Current date and time
            ]
        );
        // return redirect()->back(); 
        return redirect()->route('showskill');
    }




    public function SaveAward(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_received' => 'required|date',
            'organization' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // معالجة الصورة وحفظها في مجلد upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('upload'), $imageName);
    }

                // Insert the award along with the image
                Award::insert([
                    'user_id' => Auth::user()->id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'date_received' => $request->date_received,
                    'organization' => $request->organization,
                    'image' => $imageName, // Save the image URL
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('showaward')->with('success', 'Award saved successfully!');

        }

    public function SaveClient(Request $request)
    {
       
                // Validate the incoming request data
                $request->validate([
                    'fullname' => 'required|string|max:255',
                    'email' => 'required|email',
                    'phone' => 'required',
                    'company' => 'required',
                    'company_website' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                                // معالجة الصورة وحفظها في مجلد upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $image->move(public_path('upload'), $imageName);
                }
                // Insert the award along with the image
                Client::insert([
                    'user_id' => Auth::user()->id,
                    'fullname' => $request->fullname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'company' => $request->company,
                    'company_website' => $request->company_website,
                    'image' => $imageName,
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('showclient')->with('success', 'Award saved successfully!');
           
        }

        















    public function SaveService(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required',
            'duration' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

                // معالجة الصورة وحفظها في مجلد upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('upload'), $imageName);
    }

        Service::insert(
            [
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'duration' => $request->duration,
                'image' => $imageName,
                'created_at' => now(), // Current date and time
                'updated_at' => now(), // Current date and time
            ]
        );
        //return redirect()->back(); 
        return redirect()->route('showservice')->with('success', 'Award saved successfully!');
    }













    public function SaveSettings(Request $request)
    {
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $logo = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload'), $logo);
        }
                Setting::insert([
                    'user_id' => Auth::user()->id,
                    'agency_name' => $request->agency_name,
                    'logo' => $logo,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'description' => $request->description,
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('updatesettings');
    }
























    public function EditSettings(){
        $setting=Setting::where('user_id',Auth::user()->id)->first();
        return view('backend.editsettings',compact('setting'));
    }


    
    public function UpdateSettings(Request $request)
{
    //for test request
    // dd($request->all());
    $setting = Setting::where('user_id', Auth::user()->id)->first();

    if (!$setting) {
        return redirect()->back()->with('error', 'Settings not found.');
    }

    $logo = $setting->logo; // Retain the current logo by default

    if ($request->hasFile('logo')) {
        // Handle the uploaded logo file
        $image = $request->file('logo');
        $logo = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('upload'), $logo);

        // Optional: Delete the old logo file if needed
        if (file_exists(public_path('upload/' . $setting->logo)) && $setting->logo) {
            unlink(public_path('upload/' . $setting->logo));
        }
    }

    // Update the settings
    $setting->update([
        'agency_name' => $request->agency_name,
        'logo' => $logo,
        'address' => $request->address,
        'phone' => $request->phone,
        'email' => $request->email,
        'description' => $request->description,
        'updated_at' => now(), // Automatically updated by Eloquent
    ]);

    return redirect()->back();
}














    public function ShowEducation()
    {

        $edus = Education::where('user_id', Auth::user()->id)->get();
        return view('backend.showeducations', compact('edus'));
    }
    public function ShowExperience()
    {

        $exps = Experience::where('user_id', Auth::user()->id)->get();
        return view('backend.showexperiences', compact('exps'));
    }

    public function ShowSkill()
    {

        $skils = Skill::where('user_id', Auth::user()->id)->get();
        return view('backend.showskills', compact('skils'));
    }

    public function ShowAward()
    {

        $awds = Award::where('user_id', Auth::user()->id)->get();
        return view('backend.showawards', compact('awds'));
    }

    public function ShowClient()
    {

        $clients = Client::where('user_id', Auth::user()->id)->get();
        return view('backend.showclients', compact('clients'));
    }
    public function ShowService()
    {

        $servs = Service::where('user_id', Auth::user()->id)->get();
        return view('backend.showservices', compact('servs'));
    }


    public function AddExperience()
    {
        return view('backend.addexperience');
    }


    public function AddSkill()
    {
        return view('backend.addskill');
    }


    public function AddAward()
    {
        return view('backend.addaward');
    }


    public function AddService()
    {
        return view('backend.addservice');
    }


    public function AddClient()
    {
        return view('backend.addclient');
    }


    public function AddProject()
    {
        return view('backend.addproject');
    }

    public function AddObjective()
    {
        return view('backend.addobjective');
    }


    public function GeneralSettings()
    {
        return view('backend.generalsettings');
    }


    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }



    public function TestImage()
    {

        return view('backend.image');
    }
    // public function SaveImage(Request $request){

    //     if ($request->file('img')) {

    //         $manager = new ImageManager(new Driver());
    //     $img_name=hexdec(uniqid()).'.'.$request->file('img')->getClientOriginalExtension();
    //     $img=$manager->read($request->file('img'));
    //     $img->resize(480,480);
    //     //80 px
    //     $img->toJpeg(80)->save(base_path('public/upload/'.$img_name));
    //     $url='upload/' .$img_name;


    //     Image::insert(
    //             [
    //                 'user_id'=>Auth::user()->id,
    //                 'image'=>$url,
    //             ]
    //             );
    //             return redirect()->back(); 
    //     }



    // }




    public function ShowGallery()
    {
        // Get all files from the 'uploads' directory
        $files = Storage::files('public/upload'); // Assuming you stored images in 'public/uploads'

        // Filter only image files (optional)
        $images = array_filter($files, function ($file) {
            return in_array(File::extension($file), ['jpg', 'jpeg', 'png', 'gif']);
        });

        return view('backend.gallery', compact('images'));
    }


}
