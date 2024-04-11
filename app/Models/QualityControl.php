<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualityControl extends Model
{
    protected $table = 'quality_controls';
    protected $fillable = ['user_id', 'title', 'image'];
}
