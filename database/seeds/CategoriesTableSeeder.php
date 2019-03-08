<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->truncate();

        $categories = [
            ['id'=>1, 'name'=> 'cancer', 'description'=>'Cancer and pre-cancerous diseases ', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>2, 'name'=> 'infections', 'description'=>'Infections: Vagina, Cervix, Uterus', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>3, 'name'=> 'menstruation', 'description'=>'Menstruation disorders', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>4, 'name'=> 'contraceptive', 'description'=>'Contraceptive counselling', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
            ['id'=>5, 'name'=> 'sti tests', 'description'=>'STI Tests', 'created_at'=>new DateTime, 'updated_at'=>new DateTime],
        ];

        DB::table('categories')->insert($categories);
    }
}
