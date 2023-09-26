<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Location;
use App\Models\TourPackage;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\BlogHeader;


class HomePageController extends Controller
{
    //

    public function index() {

        $packages = TourPackage::with('package_location')->where('p_status','=',1)->limit(6)->get();

        $destination = Destination::with('des_location')->where('p_status','=',1)->limit(4)->get();

       $testimonials = Testimonial::where('status','=',1)->limit(6)->get();

       $blogs = BlogHeader::where('active','=',1)->limit(1)->get();


        return view("web.main", compact('packages','destination','testimonials', 'blogs'));

    }

}
