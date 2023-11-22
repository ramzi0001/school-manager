<?php

namespace App\Models;

use App\User;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentAbsence extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'section_abs', 'student_id', 'session'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    public function section_abs()
    {
        return $this->belongsTo(SectionAbs::class, 'section_abs');
    }

}
