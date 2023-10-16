<?php

namespace App\Models\Career;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
     // Guarded
     protected $guarded = [];
     // Table Name
     protected $table = 'careers';
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
}
