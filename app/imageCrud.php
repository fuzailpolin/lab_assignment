<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imageCrud extends Model
{
    protected $table = "imagestore";
    protected $primaryKey = "id";
    public $timestamps = false;
}
