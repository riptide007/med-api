<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class symptoms extends Model
{
   
   public $table = 'symptom';
   public $primaryKey = 'id';
   public $timestamps = true;
   public $fillable = [
   	'symptomid','name'
   ]
}
