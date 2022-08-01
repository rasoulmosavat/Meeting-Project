<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable =[
        'customer_id',
        'start_time',
        'start_time_sec',
        'end_time',
        'end_time_sec',
    ];
}
