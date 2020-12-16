<?php

use Illuminate\Database\Seeder;

class BanenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banen = [
            [
                'soort' => 'Tennisbaan 1',
            ],
            [
                'soort' => 'Tennisbaan 2',
            ],
            [
                'soort' => 'Tennisbaan 3',
            ],
            [
                'soort' => 'Tennisbaan 4',
            ],
            [
                'soort' => 'Tennisbaan 5',
            ],
            [
                'soort' => 'Tennisbaan 6',
            ],
            [
                'soort' => 'Tennisbaan 7',
            ],
            [
                'soort' => 'Squashbaan 1',
            ],
            [
                'soort' => 'Squashbaan 2',
            ],
        ];

        foreach ($banen as $baan){
            DB::table('banen')->insert($baan);
        }
    }
}
