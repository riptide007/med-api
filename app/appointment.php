<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    public $table = 'appointment';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'appmntid','patientid','doctorid','diagnosisid','date','time'
  ];
}
