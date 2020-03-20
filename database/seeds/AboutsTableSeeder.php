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
            'description' => 'Zacząłem malować jak miałem 21 lat. Nie uczęszczałem do szkół plastycznych, ani tym bardziej nie studiowałem na ASP. Maluję instynktownie. Techniczne podstawy malarstwa przekazała mi Pani Ania z pracowni "S E T  I S". Trafiłem tam dzięki mojej ówczesnej dziewczynie (obecnej żonie) i mojemu bratu, którzy kupili mi karnet na zajęcia malarstwa dla hobbistów. To był pierwszy krok, bez którego nie było by tej strony.',
        ]);
    }
}
