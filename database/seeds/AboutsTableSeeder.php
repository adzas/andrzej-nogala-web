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
            'description' => 'Zacząłem malować jak miałem 21 lat. Nigdy nie uczęszczałem do szkoły plastycznej ani tym bardziej nie studiowałem na ASP. Maluję instynktownie. Techniczne podstawy malarstwa przekazała mi Pani Ania z pracowni S E T I S z Łodzi.',
        ]);
    }
}
