<?php

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
      $this->call(UsersTableSeeder::class);
      $this->call(OptionsTableSeeder::class);
      $this->call(ApartmentsTableSeeder::class);
      $this->call(LeadsTableSeeder::class);
      $this->call(SponsorsTableSeeder::class);
    }
}