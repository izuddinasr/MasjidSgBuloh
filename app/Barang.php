<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{

	public $primaryKey = 'barang_id';
    protected $dates = ['deleted_at'];
}
