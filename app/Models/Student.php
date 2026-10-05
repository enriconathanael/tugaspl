<?php

namespace App\Models;

use File;
use Illuminate\Database\Eloquent\Model;

#[File('nis', 'name', 'gender', 'major', 'class')]
#[Table('students')]

class Student extends Model
{
    
}
