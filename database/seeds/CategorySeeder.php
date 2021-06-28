<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id'=>1, 'name'=>'Beach'],
            ['id'=>2, 'name'=>'Forest'],
            ['id'=>3, 'name'=>'Island'],
            ['id'=>4, 'name'=>'Lake'],
            ['id'=>5, 'name'=>'Mountain'],
        ]);
    }
}
