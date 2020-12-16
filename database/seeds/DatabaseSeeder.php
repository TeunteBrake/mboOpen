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
        $this->call(LedenSeeder::class);
        $this->call(BanenSeeder::class);
        $this->call(ReserveringenSeeder::class);
    }
}
