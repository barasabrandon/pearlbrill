<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAssignmentHelp extends Model
{
    use HasFactory;

    protected $table = 'order_assignment_helps';

    public $fillable = ['email', 'order_type', 'number_of_pages'];
}
