<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SpecialistesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('specialistes')->truncate();

        $faker = Faker::create();
        $specialistes = [];

        foreach(range(1, 8) as $index)
        {
            $filepath = storage_path('images');
            
            if(!File::exists($filepath)){
                File::makeDirectory($filepath);
            }

            $specialistes[] = [
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'title' => $faker->company,
                'address' => "{$faker->streetName} {$faker->postcode} {$faker->city}",
                'email' => $faker->email,
                'contact' => $faker->phoneNumber,
                'image' => $faker->image($filepath,400,300),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ];
        }

        DB::table('specialistes')->insert($specialistes);
    }
}
