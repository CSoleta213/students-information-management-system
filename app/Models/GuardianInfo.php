<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GuardianInfo extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'mothers_name', 'fathers_name', 'legal_guardians_name'];
}
