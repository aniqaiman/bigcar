<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tours';
    protected $primaryKey = 'tour_id';
    public $timestamp = 'true';
    protected $fillable = [
    	'tour_name',
    	'tour_date',
    	'tour_pax',
    	'tour_cat',
    ];

    public function users()
    {
        return $this->hasMany('App\User', 'user_id');
    }
}
