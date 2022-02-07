<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker; 
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $holiday = new Holiday();
        $holiday->country = $faker->country();
        $holiday->city = $faker->city();
        $holiday->holiday_start = $faker->dateTimeThisYear();
        $holiday->holiday_end = $faker->dateTimeThisYear();
        $holiday->transport_type = $faker->words(3, true);
        $holiday->transport_inclusion = $faker->boolean();
        $holiday->hotel_address = $faker->address();
        $holiday->hotel_rating = $faker->numberBetween(1, 5);
        $holiday->room_type = $faker->words(2, true);
        $holiday->price = $faker->numberBetween(500, 5000);
        $holiday->confirmed = $faker->boolean();
        $holiday->description = $faker->text(50);
        $holiday->contract_code = $faker->randomDigit();
        $holiday->save();
    }
}
