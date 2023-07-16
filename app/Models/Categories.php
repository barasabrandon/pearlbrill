<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    
    // Table name
    protected $table = 'categories';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
