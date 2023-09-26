<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ourteam extends Model
{
    //

    protected $table = "ourteams";


    protected $fillable = ['member_categories_id','image','name','role','description'];


    public function ourteam()
	{


		return  $this->image;
	}

    public function member_cate() {

		return $this->belongsTo('App\MemberCategory', 'member_categories_id');
  }

}
