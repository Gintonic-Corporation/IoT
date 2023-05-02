<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air_extractor_sensor extends Model
{
    use HasFactory;
    protected $fillable= [
        'airExtractorID', 'date', 'meter', 'consumption'
    ];
}
