<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standard_Penetration_Test extends Model
{
    protected $table = 'standard_penetration_tests';
    protected $fillable = ['user_id', 'title', 'image'];
}

