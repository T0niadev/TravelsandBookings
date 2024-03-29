<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use App\Models\BlogHeader;
use App\Models\Destination;
class PackageControllers extends Controller
{
    //
    public function index() {

        $packages = TourPackage::with('package_location','tours')->paginate(6);

        // dd($packages);

        $blogs = BlogHeader::with('blogs')->limit(5)->get();

        $destinations = Destination::with('des_location')->limit(5)->get();

        return view('web.package', compact('packages','blogs','destinations'));

    }

}
