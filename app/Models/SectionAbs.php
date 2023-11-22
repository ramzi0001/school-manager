<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SectionAbs extends Eloquent
{
    use HasFactory;

    protected $fillable = [
        'my_class_id', 'section_id', 'subject_id', 'wd_date', 'session'
    ];


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function my_class()
    {
        return $this->belongsTo(MyClass::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function student_abs()
    {
        return $this->hasMany(StudentAbs::class);
    }

}
