<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samples extends Model
{
    use HasFactory;    

    // Table name
    protected $table = 'samples';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
