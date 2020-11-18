<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diagnosis extends Model
{
    public $table = 'diagnosis';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'patientid','diseaseid','recommendation'
  ];
}
