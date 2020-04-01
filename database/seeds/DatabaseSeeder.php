<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call([
            AboutsTableSeeder::class,
            UserTableSeeder::class,
            ContactTableSeeder::class,
        ]);

        /* DB::table('galleries')->insert([
            'name' => 'Ania <3 (moja żona)',
            'file_name' => 'https://www.instagram.com/p/Bpxibv8g-e8/',
            'alt' => 'Rysunek kobiety, długopisem',
            'description' => 'Rysunek długopisem.',
        ]); */
    }
}
