<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $productSeeder = new ProductsSeeder();
        $productSeeder->run();
        $ingredientSeeder = new IngredientsSeeder();
        $ingredientSeeder->run();

    }
}
