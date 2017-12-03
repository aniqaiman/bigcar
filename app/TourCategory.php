<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    protected $table = 'tourscategories';
    protected $primaryKey = 'cat_id';
    public $timestamp = 'true';
    protected $fillable = [
    	'cat_name',
    	];
}
