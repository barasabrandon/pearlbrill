<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model 
{
    use HasFactory;
    
    // Table name
    protected $table = 'blogs';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;

   
}
