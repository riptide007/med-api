<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    public $table = 'doctor';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'docid','fname','lname','email','address','phone','speciality'
  ];
}
