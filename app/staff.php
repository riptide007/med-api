<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    public $table = 'staff';
  public $primaryKey = 'id';
  public $timestamps = true;
  public $fillable = [
    'fname','lname','address','email','phone','jobgrp'
  ];
}
