<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker; 

use App\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $company = ['Trenitalia', 'Italo', 'Trenord', 'Tresud'];
        for($i = 0; $i < 20; $i++) {

        $newTrain = new Train();
        // tutte le colonne
        $newTrain->company = $company[rand(0,count($company) - 1)];
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time =  $faker->time();
        $newTrain->arrival_time =  $faker->time();
        $newTrain->train_code = rand(1000, 9999);
        $newTrain->carriage_number = rand(1, 20);
        $newTrain->in_time = '1';
        $newTrain->cancelled = '0';
        $newTrain->save();
    }
}
}
