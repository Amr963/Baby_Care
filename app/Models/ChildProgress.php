<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildProgress extends Model
{
    use HasFactory;
    protected $fillable = [
        'month',
        'abdominal_recumbency',
        'dorsal_recumbency',
        'visual_development',
        'social',
        'sitting',
        'stand_up',
        'adaptation',
        'movement',
        'language',
    ];
}