<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
   public $primaryKey = 'acara_id';

   protected $dates = ['deleted_at'];
}
