<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ahli extends Model
{

	public $primaryKey = 'ahli_id';
    protected $dates = ['deleted_at'];
}
