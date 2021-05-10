<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $table = 'patient';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'refugeeid','fname','lname','age','allegies','history'
  ];
}
