<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Contact::create([
            'email' => 'nogala.andrzej@gmail.com',
            'fb' => 'https://www.facebook.com/nogala.andrzej/',
            'insta' => 'https://www.instagram.com/andrzej_nogala/',
            'twitter' => '',
            'snapchat' => '',
            'youtube' => '',
        ]);
    }
}
