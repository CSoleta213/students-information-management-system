<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'course', 'year_level'];

    public function guardianInfo(): HasOne {
        return $this->hasOne(GuardianInfo::class);
    }

    // public function guardianInfo(): HasOne {
    //     return $this->hasOne(GuardianInfo::class);
    // }
}
