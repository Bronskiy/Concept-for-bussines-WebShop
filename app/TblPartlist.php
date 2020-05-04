<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TblPartlist extends Model
{
  protected $fillable = [
      'id',
      'tag_number',
      'idArtikel',
      'idProjekt',
      'menge',
  ];
}
