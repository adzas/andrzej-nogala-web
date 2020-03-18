<?php

use App\About;
use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return About::create([
            'title' => 'O mnie',
            'description' => 'Lorem ipsum',
        ]);
    }
}
