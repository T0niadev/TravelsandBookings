<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Location;
use App\Models\TourPackage;
use App\Models\TourGallery;
use App\Models\TourSchedule;

class TourdetailsController extends Controller
{
    //

    public function index($id) {

        $packages = TourPackage::with('package_location')->where('id','=',$id)->first();



        $days = TourSchedule::where('tour_packages_id','=',$id)->get();

       $packagesgallery = TourGallery::where('tour_packages_id','=',$id)->get();

       $newgallery = TourGallery::where('tour_packages_id','=',$id)->max('id');


       $otherpackages = TourPackage::with('package_location')->limit(5)->get();

        return view('web.tourdetail', compact('packages','packagesgallery','newgallery','otherpackages' ,'days','id'));


    }



}
