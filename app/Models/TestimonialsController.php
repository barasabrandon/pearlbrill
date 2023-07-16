<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialsController extends Model
{
    use HasFactory;

    public function index()
    {
        return view('dashboard.testmonials.create');
    }

    public function create()
    {
        return view('dashboard.testmonials.create');
    }
}
