<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminSkill extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_name',
        'skill_percent',
        'skill_rank'
    ];
}
