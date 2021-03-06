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
         $this->call(PeopleTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);

         $this->call(ProductsTableSeeder::class);
         $this->call(PeopleTableSeeder::class);
        $this->call(AddressesTableSeeder::class);

    }
}
