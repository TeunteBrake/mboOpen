<?php

use Illuminate\Database\Seeder;

class ReserveringenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserveringen = [
            [
                'baanID' => mt_rand(1,7),
                'userID' => mt_rand(1,5),
                'datum' => '2020-10-29 10:00:00',
                'tijdsDuur' => mt_rand(0, 2),
                'omschrijving' => 'Wedstrijd'
            ],
            [
                'baanID' => mt_rand(1,7),
                'userID' => mt_rand(1,5),
                'datum' => '2020-10-29 10:00:00',
                'tijdsDuur' => mt_rand(0, 2),
                'omschrijving' => 'Oefenen'
            ],
            [
                'baanID' => mt_rand(1,7),
                'userID' => mt_rand(1,5),
                'datum' => '2020-10-29 10:00:00',
                'tijdsDuur' => mt_rand(0, 2),
                'omschrijving' => 'Oefenen'
            ],
            [
                'baanID' => mt_rand(1,7),
                'userID' => mt_rand(1,5),
                'datum' => '2020-10-29 10:00:00',
                'tijdsDuur' => mt_rand(0, 2),
                'omschrijving' => 'Les'
            ],
            [
                'baanID' => mt_rand(1,7),
                'userID' => mt_rand(1,5),
                'datum' => '2020-10-29 10:00:00',
                'tijdsDuur' => mt_rand(0, 2),
                'omschrijving' => 'Prive'
            ],

        ];

        foreach ($reserveringen as $reservering){
            DB::table('banenreserveringen')->insert($reservering);
        }
    }
}
