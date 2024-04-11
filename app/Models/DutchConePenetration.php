<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DutchConePenetration extends Model
{
    protected $table = 'dutch_cone_penetrations';
    protected $fillable = ['user_id', 'title', 'image'];
}
