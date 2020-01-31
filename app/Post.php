<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='tbltest';
    // public $primaryKey='machine_id';
      //protected $table='posts';
      protected $fillable = [
        'name', 'email',
    ];
}
