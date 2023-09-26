<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination_Image extends Model
{
    //

    protected $fillable = ['destinations_id', 'image'];

    public function destinationsimagepath() {

        return $this->image;
    }

    public function destinationimage() {

		return $this->belongsTo('App\Models\Destination', 'destinations_id');

	}


}
