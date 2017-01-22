<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    protected $table = 'markers';
    protected $fillable = ['name', 'url', 'note', 'category_id', 'user_id'];

    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function tags(){

    	return $this->belongsToMany('App\Tags');
    }


}
