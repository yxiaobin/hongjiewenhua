<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $table = "page";
    protected $primaryKey = "id";
    public $timestamps = false;
}
