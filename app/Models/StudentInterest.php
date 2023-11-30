<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentInterest extends Model
{
    use HasFactory;

    protected $table = 'interest_students';

    public function interest_studentid(): HasMany
    {
        return $this->hasMany(Student::class, 'interest_studentid', 'id');
    }


}
