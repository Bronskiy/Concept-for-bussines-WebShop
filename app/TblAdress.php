<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TblAdress extends Model
{
  protected $fillable = [
      'id', 'short_name',
  ];
}
