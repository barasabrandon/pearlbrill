<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;

     // Table name
     protected $table = 'contact_us';
     //primary key
     public $primarykey = 'id';
 
     //Time stamps 
     public $timestamps = true;
}
