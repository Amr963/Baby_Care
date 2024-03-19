<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildLengthStats extends Model
{
    use HasFactory;
    protected $fillable = [
        'age',
        'length_child'
    ];
}