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
        return redirect()->back();
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
        return redirect()->back();
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

        // Initialize image URL
        $url = null;

        // Handle the image upload
        if ($request->hasFile('image')) {
            try {
                $manager = new ImageManager(new Driver());
                $img_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
                $img = $manager->read($request->file('image'));
                $img->resize(480, 480);
                // Save image with 80 quality
                $img->toJpeg(80)->save(base_path('public/upload/' . $img_name));
                $url = 'upload/' . $img_name;
            } catch (\Exception $e) {
                // Handle image upload error
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }

        // Check if URL was generated
        if ($url) {
            try {
                // Insert the award along with the image
                Award::insert([
                    'user_id' => Auth::user()->id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'date_received' => $request->date_received,
                    'organization' => $request->organization,
                    'image' => $url, // Save the image URL
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('showaward')->with('success', 'Award saved successfully!');
            } catch (\Exception $e) {
                // Handle database insertion error
                return redirect()->back()->with('error', 'Database insertion failed: ' . $e->getMessage());
            }
        }

        return redirect()->back()->with('error', 'Image upload failed!');
    }


    public function SaveClient(Request $request)
    {
        // Validate the incoming request data
        

        // Initialize image URL
        $url = null;

        // Handle the image upload
        if ($request->hasFile('image')) {
            try {
                $manager = new ImageManager(new Driver());
                $img_name = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
                $img = $manager->read($request->file('image'));
                $img->resize(480, 480);
                // Save image with 80 quality
                $img->toJpeg(80)->save(base_path('public/upload/' . $img_name));
                $url = 'upload/' . $img_name;
            } catch (\Exception $e) {
                // Handle image upload error
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }

        // Check if URL was generated
        if ($url) {
            try {
                // Insert the award along with the image
                Client::insert([
                    'user_id' => Auth::user()->id,
                    'fullname' => $request->fullname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'company' => $request->company,
                    'company_website' => $request->company_website,
                    'image' => $url,
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('showclient')->with('success', 'Award saved successfully!');
            } catch (\Exception $e) {
                // Handle database insertion error
                return redirect()->back()->with('error', 'Database insertion failed: ' . $e->getMessage());
            }
        }

        return redirect()->back()->with('error', 'Image upload failed!');
    }


    public function SaveService(Request $request)
    {

        Service::insert(
            [
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'duration' => $request->duration,
                'image' => $request->image,
                'created_at' => now(), // Current date and time
                'updated_at' => now(), // Current date and time
            ]
        );
        //return redirect()->back(); 
        return redirect()->route('showservice');
    }


    public function SaveSettings(Request $request)
    {
        // Validate the incoming request data
        

        // Initialize image URL
        $url = null;

        // Handle the image upload
        if ($request->hasFile('logo')) {
            try {
                $manager = new ImageManager(new Driver());
                $img_name = hexdec(uniqid()) . '.' . $request->file('logo')->getClientOriginalExtension();
                $img = $manager->read($request->file('logo'));
                $img->resize(480, 480);
                // Save image with 80 quality
                $img->toJpeg(80)->save(base_path('public/upload/' . $img_name));
                $url = 'upload/' . $img_name;
            } catch (\Exception $e) {
                // Handle image upload error
                return redirect()->back()->with('error', 'Image processing failed: ' . $e->getMessage());
            }
        }

        // Check if URL was generated
        if ($url) {
            try {
                // Insert the award along with the image
                Setting::insert([
                    'agency_name' => $request->agency_name,
                    'logo' => $url,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'description' => $request->description,
                    'created_at' => now(), // Current date and time
                    'updated_at' => now(), // Current date and time
                ]);

                return redirect()->route('showclient')->with('success', 'Award saved successfully!');
            } catch (\Exception $e) {
                // Handle database insertion error
                return redirect()->back()->with('error', 'Database insertion failed: ' . $e->getMessage());
            }
        }

        return redirect()->back()->with('error', 'Image upload failed!');
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
