<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = [
		'title',
		'body'
	];

	// Since each question belongs to a user, create a method in singular name user(), with relationship
	// belongs to and arguement for the user table, since A Question belongs to a user. belongsTo is inverse of
	// has One to Many | hasMany().

    public function user() {
    	return $this->belongsTo('App/User');
    }
}
