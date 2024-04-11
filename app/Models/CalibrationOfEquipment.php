<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalibrationOfEquipment extends Model
{
    protected $table = 'calibration_of_equipment';
    protected $fillable = ['user_id', 'title', 'image'];
}
