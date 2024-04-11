<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PavementEvaluationTest extends Model
{
    protected $table = 'pavement_evaluation_tests';
    protected $fillable = ['user_id', 'title', 'image'];
}
