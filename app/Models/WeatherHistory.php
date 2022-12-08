<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherHistory extends Model
{
    use HasFactory;

    protected $table = 'weather_history';

    protected $fillable = [
        'city',
        'lat',
        'lon',
        'weather_condition',
        'temperature',
        'feels_like',
        'humidity',
        'speed'
    ];
}
