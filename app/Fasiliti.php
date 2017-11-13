<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasiliti extends Model
{
	public $primaryKey = 'fasiliti_id';
    protected $dates = ['deleted_at'];
}
