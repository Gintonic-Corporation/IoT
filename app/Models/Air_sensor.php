<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air_sensor extends Model
{
    use HasFactory;
    protected $fillable =[
        'compressorID', 'date', 'meter', 'consumption', 'producedAir'
    ];
}
