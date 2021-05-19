<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker; //aggiunto da me
use App\Trip; //aggiunto da me

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      // $trip = new Trip();
      // $trip->destination_country = 'Spagna';
      // $trip->destination_cities = 'Madrid';
      // $trip->description = 'Il viaggio è bellissimo';
      // $trip->accomodation = 'Camera Superior';
      // $trip->treatment = 'Formula tutto incluso';
      // $trip->number_of_people = 'due o più';
      // $trip->children = 0;
      // $trip->duration = '7 notti';
      // $trip->departure = ('2021-07-12');
      // $trip->return = ('2021-07-20');
      // $trip->save();

      for ($i=0; $i < 10; $i++) {
        $newTrip = new Trip();
        $newTrip->destination_country = $faker->asciify();
        $newTrip->destination_cities = $faker->asciify();
        $newTrip->description = $faker->paragraph(2);
        $newTrip->accomodation = $faker->asciify();
        $newTrip->treatment = $faker->asciify();
        $newTrip->number_of_people = $faker->asciify();
        $newTrip->children = $faker->numberBetween(0, 1);
        $newTrip->duration = $faker->asciify();
        $newTrip->departure = $faker->date();
        $newTrip->return = $faker->date();
        $newTrip ->save();
      }
    }
}
