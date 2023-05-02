<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer_sensor extends Model
{
    use HasFactory;
    protected $fillable =[
        'producerID', 'date', 'meter', 'consumption', 'itemsProduced'
    ];
}
