<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelVarient extends Model
{
    public $timestamps = false;
    protected $fillable=['modelvarient','vendor_id','totalnos','acinfo','pushback','seats'];
}
