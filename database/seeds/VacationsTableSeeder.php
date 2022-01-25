<?php

use Illuminate\Database\Seeder;
use\App\Vacation;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creazione di 20 vacation
        
        // 1. creazione model e importazione nel seeder

        // 2. creazione dei dati 

        for ($i = 0; $i < 20; $i++) {
            // creazione nuova istanza (row) di vacation
            $new_vacation = new Vacation();

            //popolazione delle colonne 
            $new_vacation->name = 'Lorem ipsum';
            $new_vacation->destination = 'Lorem ipsummmmmmmmmmmmmmm';
            $new_vacation->night = rand(1, 13);
            $new_vacation->price = rand(315, 3000);

            //salvataggio della row nella tabella DB
            $new_vacation->save();
        }
    }
}
