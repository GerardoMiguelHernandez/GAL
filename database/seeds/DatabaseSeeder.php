<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CentrosTableSeeder::class);
         $this->call(EventosTableSeeder::class);
         $this->call(AlbumTableSeeder::class);
         $this->call(ImagenTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
    }
}
