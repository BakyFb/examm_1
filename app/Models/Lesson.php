<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /** @use HasFactory<\Database\Factories\LessonFactory> */
    use HasFactory;
    protected $guarded = ['id'];
    public function students()
    {
        return $this->belongsTo(Student::class, 'registrations');
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'registrations');
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'registrations');
    }
    public function seasons()
    {
        return $this->belongsTo(Season::class, 'registrations');
    }
    public function locations()
    {
        return $this->belongsTo(Location::class, 'registrations');
    }
}
