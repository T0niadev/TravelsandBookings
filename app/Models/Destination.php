<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    //
    protected $fillable = ['locations_id','name','description','image','p_status'];

    public function destinationspath()
	{


		return 'multimages/destinations/' . $this->image;
	}

    public function destination() {

		return $this->hasMany('App\Models\Destination_Image', 'destinations_id');

    }

    public function des_location() {

            return $this->belongsTo('App\Models\Location', 'locations_id');

    }


}
