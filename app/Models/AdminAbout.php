<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'about_heading',
        'about_desc',
        'dev_heading',
        'dev_desc',
        'last_desc',
        'happy_clients',
        'projects',
        'reviews',
        'skills',
        'about_image',
    ];

}
