<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\WeatherHistory;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ;$i < 150; $i++){
            $wcon = ['Clear', 'Sunny', 'Clouds', 'Mist'];

            $cities = [
                'Tokyo' => [
                    'city' => 'Tokyo',
                    'lat' => '35.6828',
                    'lon' => '139.7595',
                    'weather_condition' => array_rand($wcon, 1),
                ],
                'New York' => [
                    'city' => 'New York',
                    'lat' => '40.7127',
                    'lon' => '-74.006',
                    'weather_condition' => array_rand($wcon, 1),
                ],
                'London' => [
                    'city' => 'London',
                    'lat' => '51.5073',
                    'lon' => '-0.1276',
                    'weather_condition' => array_rand($wcon, 1),
                ],
                'Sharjah' => [
                    'city' => 'Sharjah',
                    'lat' => '25.3463',
                    'lon' => '55.4209',
                    'weather_condition' => array_rand($wcon, 1),
                ],
                'Dubai' => [
                    'city' => 'Dubai',
                    'lat' => '25.2048',
                    'lon' => '55.2708',
                    'weather_condition' => array_rand($wcon, 1),
                ],
                'Abu Dhabi' => [
                    'city' => 'Abu Dhabi',
                    'lat' => '24.4882',
                    'lon' => '54.355',
                    'weather_condition' => array_rand($wcon, 1),
                ]
            ];

            $randomData = array_rand($cities, 1);



            $minimum_time=strtotime("00:00:00");
            $maximum_time=strtotime("23:59:15");
            $rand=rand($minimum_time,$maximum_time);
            $str=date("2022-12-08 H:i:s",$rand);


            $arr = [
                'city' => $randomData,
                'lat' => $cities[$randomData]['lat'],
                'lon' => $cities[$randomData]['lon'],
                'weather_condition' => $cities[$randomData]['weather_condition'],
                'temperature' => rand(38, 80) / rand(2,4),
                'feels_like' => rand(38, 80) / rand(2,4),
                'humidity' => rand(50, 80),
                'speed' => rand(4, 7) / rand(2,4),
                'created_at' => date("2022-12-08 H:i:s",rand($minimum_time,$maximum_time)),
                'updated_at' => date("2022-12-08 H:i:s",rand($minimum_time,$maximum_time)),
            ];

            WeatherHistory::create($arr);
        }
    }
}
