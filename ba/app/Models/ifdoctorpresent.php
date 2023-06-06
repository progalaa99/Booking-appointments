<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ifdoctorpresent extends Model
{
    use HasFactory;
    protected $fillable = ['days','start_time','end_time'];
}
