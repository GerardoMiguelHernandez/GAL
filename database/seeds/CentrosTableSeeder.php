<?php

use Illuminate\Database\Seeder;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
factory(App\CentroModel::class,50)->create();    
    //
    }
}
