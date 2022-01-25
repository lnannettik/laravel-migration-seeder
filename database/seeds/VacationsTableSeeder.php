<?php

use Illuminate\Database\Seeder;
// use Illuminate\Support\Str; -------------> include del pacchetto metodi 'string' di Laravel

//include Faker
use Faker\Generator as Faker;

//include model
use App\Vacation;


class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
    
        for ($i = 0; $i < 20; $i++) {
            // creazione nuova istanza (row) di vacation
            $new_vacation = new Vacation();

            //popolazione delle colonne 
            $new_vacation->name = $faker->text(5);
            $new_vacation->destination = $faker->text(12);
            $new_vacation->night = $faker->numberBetween(2, 14);
            $new_vacation->price = $faker->numberBetween(150, 8000);
            /**
             * $new_vacation->slug = Str::slug($new_vacation->title, '-');
             * ---------- genera una slug con le parole del titolo spaziate da '-' ---------------
             * ---------- ricorda l'include sopra use Illuminate\Support\Str; --------------------
             * 
             * $new_vacation->path_img = $faker->imageUrl(640, 480, 'category', true);
             * ---------- genera un'immagine da placeholder.com con i parametri tra parentesi
             * 
             */

            //salvataggio della row nella tabella DB
            $new_vacation->save();
        }
    }
}
