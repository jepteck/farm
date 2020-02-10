<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table='posts';
    // public $primaryKey='machine_id';
      //protected $table='posts';
      protected $fillable = [
      
        'equipment_type',	'sub_county',   'equipment_type', 'sub_county', 'manufacturer', 'cost', 'image', 
    ];
}
