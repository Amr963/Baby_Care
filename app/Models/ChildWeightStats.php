<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildWeightStats extends Model
{
    use HasFactory;
    protected $fillable = ['age', 'age_category', 'weightKg'];
}
