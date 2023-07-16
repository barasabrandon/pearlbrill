<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'key_performance_indicators';
    //primary key
    public $primarykey = 'id';

    //Time stamps 
    public $timestamps = true;
}
