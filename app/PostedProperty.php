<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostedProperty extends Model
{
    protected $table ="posted_properties";

   protected $primarykey ="id";

    public $timestamps =true;
}