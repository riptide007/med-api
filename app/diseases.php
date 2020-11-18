<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseases extends Model
{
    public $table = 'dideases';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'diseaseid','name','symid1','symid2','symid3','symid4'
  ];
}
