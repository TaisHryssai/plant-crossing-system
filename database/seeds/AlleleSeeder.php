<?php

use Illuminate\Database\Seeder;
use App\Allele;
use Illuminate\Support\Facades\DB;

class AlleleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Allele::insert([
        	['value' => 'a', 'name'  => 'ondulada'],
            ['value' => 'A', 'name'  => 'lisa'],
            ['value' => 'b', 'name'  => 'Amarela'],
            ['value' => 'B', 'name'  => 'Verde'],
            ['value' => 'c', 'name'  => 'Purpura'],
            ['value' => 'C', 'name'  => 'Branca'],
            ['value' => 'd', 'name'  => 'Constrita'],
            ['value' => 'D', 'name'  => 'Inflada'],
            ['value' => 'e', 'name'  => 'Amarela'],
            ['value' => 'E', 'name'  => 'Verde'],
            ['value' => 'f', 'name'  => 'Axial'],
            ['value' => 'F', 'name'  => 'Terminal'],
            ['value' => 'g', 'name'  => 'Anao'],
            ['value' => 'G', 'name'  => 'Alto'],
        ]);
    }
}
