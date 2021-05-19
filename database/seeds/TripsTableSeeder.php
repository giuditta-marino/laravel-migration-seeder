<?php

use Illuminate\Database\Seeder;

use App\Trip; //aggiunto da me

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $trip = new Trip();
      $trip->destination_country = 'Spagna';
      $trip->destination_cities = 'Madrid';
      $trip->description = 'Il viaggio è bellissimo';
      $trip->accomodation = 'Camera Superior';
      $trip->treatment = 'Formula tutto incluso';
      $trip->number_of_people = 'due o più';
      $trip->children = 0;
      $trip->duration = '7 notti';
      $trip->departure = ('2021-07-12');
      $trip->return = ('2021-07-20');
      $trip->save();
    }
}
