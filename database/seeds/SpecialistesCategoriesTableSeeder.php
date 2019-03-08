<?php

use Illuminate\Database\Seeder;

class SpecialistesCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('specialiste_categorie')->truncate();

        $specialisteCategorie = [];

        foreach(range(1, 8) as $index)
        {
            $specialisteCategorie[] = [
                'specialiste_id' => $index,
                'categorie_id' => rand(1,5),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ];
        }

        DB::table('specialiste_categorie')->insert($specialisteCategorie);
    }
}
