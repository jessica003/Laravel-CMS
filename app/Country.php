<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){
    	// return $this->hasManyThrough('App\Post','App\User','country_id','user_id')
    	//App/user is intermediate table and 3rd parameter will be output table id in intermediate table and 4th parameter will be id of intermediate table in table from which we have to find out values.

    	return $this->hasManyThrough('App\Post','App\User');
    }
}
