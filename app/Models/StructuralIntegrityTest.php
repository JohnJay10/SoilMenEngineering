<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StructuralIntegrityTest extends Model
{
    protected $table = 'structural_integrity_tests';
    protected $fillable = ['user_id', 'title', 'image'];
}
