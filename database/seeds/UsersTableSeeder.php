<?php

use Illuminate\Database\Seeder;
use App\Seed;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run( Faker $faker)
    {
        $auto= new Seed();
        $auto->name=$faker->name();
        $auto->sur_name=$faker->name();
        $auto->save();
    }
}
