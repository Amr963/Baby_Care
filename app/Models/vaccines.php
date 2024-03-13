<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccines extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'image_path_vaccines',
        'short_video_path_vaccines',
        'indication',
        'recommended_age',
        'guidelines',
        'injection_location',
    ];
}
