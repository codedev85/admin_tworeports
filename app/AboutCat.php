<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutCat extends Model
{
   use SoftDeletes;
    public $table = 'aboutcats';
}
