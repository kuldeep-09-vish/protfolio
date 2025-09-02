<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdminData extends Model
{
    use HasFactory;
    //
    protected $fillable = [
        'name',
        'position',
        'birthday',
        'phone',
        'email',
        'age',
        'website',
        'degree',
        'city',
        'freelance',
        'fb',
        'insta',
        'skype',
        'linkedin',
        'twitter',
        'hero_bg_image',
    ];
}
