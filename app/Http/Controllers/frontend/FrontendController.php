<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index(){




    
        // Fetch all records from the website_infos table
        $fronts = Setting::all();

        // Pass the data to the view
        return view('frontend.index', compact('fronts'));
    }
}
