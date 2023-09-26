<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogHeader;

class BlogsdetailsControllers extends Controller

{
    //
    public function index($id) {


        $blogs = BlogHeader::with('blogs')->where('id',$id)->first();



        return view ('web.blog-inner', compact('blogs', 'id'));

    }


}
