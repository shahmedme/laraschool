<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['student_id', 'name', 'class', 'semester', 'bangla', 'english', 'math', 'physics', 'biology', 'chemistry'];
}
