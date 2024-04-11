<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTestService extends Model
{
    protected $table = 'lab_test_services';
    protected $fillable = ['user_id', 'title', 'image'];
}
