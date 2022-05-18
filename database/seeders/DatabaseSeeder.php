<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\Location;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Location::create(
            [
                "name" => "Wilmington,NC",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );
        Location::create(
            [
                "name" => "Portland,Or",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );
        Location::create(
            [
                "name" => "Toronto",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );
        Location::create(
            [
                "name" => "Warshaw",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );
        Location::create(
            [
                "name" => "Valency",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );
        Location::create(
            [
                "name" => "Shanghai",
                "address" => "Washington st, 234",
                "supportContact" => "John Smith, jojn@fridjemaster.com",
                "phone" => +123454645,
                "pricePerHighLevel" => 25,
                "pricePerMediumLevel" => 20,
                "pricePerLowLevel" => 15,

            ]
        );

        $locations = Location::all()->each(function ($location){
            $i = 1;
            $levels = ['High','Medium','Low'];
            Block::factory(rand(30,70))->make(['location_id'=>$location->id])->each(function ($block) use($location,&$i,$levels) {

                $block->frostLevel = $levels[rand(0,2)];
                $block->code = $location->name.'_'.$block->frostLevel.'_'.$i++;
                $block->save();
            });
        });


    }
}
