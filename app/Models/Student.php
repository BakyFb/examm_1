<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class);
    }


}
