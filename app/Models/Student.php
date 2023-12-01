<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';



    // public function studentInterest()
    // {
    //     return $this->hasMany(StudentInterest::class,'categorie_id');
    // }
}
