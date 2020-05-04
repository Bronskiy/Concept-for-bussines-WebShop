<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class TblArtikel extends Model
{
  protected $fillable = [
      'id',
      'artikel_name',
      'artikel_nr2',
      'artikel_description',
      'artikel_delivery_days',
      'artikel_vkprice',
      'artikel_currency',
      'artikel_unit',
      'artikel_price_valid',
  ];
}
