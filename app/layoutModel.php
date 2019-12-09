<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class layoutModel extends Model
{
    protected $table = "layout";
    protected $primaryKey = "id";
    public $timestamps = false;
}
