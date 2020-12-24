<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prak7 extends Model
{
    use HasFactory;
		public $table="prak7";
		protected $guarded=['id','created_at','updated_at'];
}
