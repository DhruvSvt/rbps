<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admissionform extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'previous_school_name',
        'father_name',
        'admitted_class',
        'mother_name',
        'dob',
        'address',
        'gender',
        'contact_no',
    ];
}
