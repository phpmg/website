<?php

use Illuminate\Database\Seeder;

class OrganizersSeeder extends Seeder
{
    public function run()
    {
        $organizer = new \App\Models\Organizer();
        $organizer->name = 'Luiz Felipe Pedone';
        $organizer->image = '/assets/img/organizers/luiz-pedone.jpg';
        $organizer->facebook = 'luizpedone';
        $organizer->twitter = 'luizpedone';
        $organizer->github = 'luizpedone';
        $organizer->save();

        $organizer = new \App\Models\Organizer();
        $organizer->name = 'Lucas Mezêncio';
        $organizer->image = '/assets/img/organizers/lucas-mezencio.jpg';
        $organizer->facebook = 'lucasmezencio';
        $organizer->twitter = 'lucasmezencio';
        $organizer->github = 'lucasmezencio';
        $organizer->save();
    }
}
