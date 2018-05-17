<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    //
    protected $table = "form";
    protected $primaryKey = "id";
    public $timestamps = false;
    public function kind(){
        return $this->belongsTo("App\Brand","brand","id")->withDefault();
    }
}
