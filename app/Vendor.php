<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
   // Timestamps
   public $timestamps = false;
   protected $fillable=['vendorname','city','numofvehicles','numofmodels','mobilenum','taluk'];
}
