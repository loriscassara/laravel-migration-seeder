<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $trains = [
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Torino',
                'departure_time' => '01:00:00',
                'arrival_time' => '02:00:00',
                'train_code' => 'TR2222GL45',
                'in_time' => true,
                'delated' => false
            ],
            [
                'agency' => 'Trenitalia',
                'departure_station' => 'Napoli',
                'arrival_station' => 'Roma',
                'departure_time' => '04:00:00',
                'arrival_time' => '08:00:00',
                'train_code' => 'TR5555GL45',
                'in_time' => false,
                'delated' => true
            ]
        ];

        foreach($trains as $train){
            $newTrain = new Train();
            $newTrain->agency = $train['agency'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->in_time = $train['in_time'];
            $newTrain->delated = $train['delated'];
            $newTrain->save();
        }

        for($i = 0; $i < 3; $i++){
            $newTrain = new Train();
            $newTrain->agency = $faker->words(2, true);
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->isbn10();
            $newTrain->in_time = $faker->boolean();
            $newTrain->delated = $faker->boolean();
            $newTrain->save();
        }
    }
}
