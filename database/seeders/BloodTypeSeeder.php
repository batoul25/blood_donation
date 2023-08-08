<?php

namespace Database\Seeders;

use App\Models\blood;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BloodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $bloodGroups = [
        '1' => 'A+',
        '2' => 'A-',
        '3' => 'B+',
        '4' => 'B-',
        '5' => 'O+',
        '6' => 'O-',
        '7' => 'AB+',
        '8' => 'AB-',
    ];

    public function run()
    {
        //
        array_walk($this->bloodGroups, function ($bloodGroup, $key) {
            blood::create([
                'id' => $key,
                'blood_type' => $bloodGroup,
            ]);
        });
    }

}
