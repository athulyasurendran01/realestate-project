<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Menu extends Model
{
    protected $fillable = ['title', 'path','parent','status','show','icon'];
    protected $table = 'menus';
}
