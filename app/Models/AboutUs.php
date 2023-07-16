<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

       // Table name
       protected $table = 'about_us';
       //primary key
       public $primarykey = 'id';
   
       //Time stamps 
       public $timestamps = true;
}
