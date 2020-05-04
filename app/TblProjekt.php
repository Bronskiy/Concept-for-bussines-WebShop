<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TblProjekt extends Model
{
  protected $fillable = [
      'id', 'projekt_name', 'idAdresse', 'projekt_description',
  ];
}
