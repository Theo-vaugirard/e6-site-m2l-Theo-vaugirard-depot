<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intervention;
use Illuminate\Support\Facades\DB;


class InterventionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('ALTER TABLE interventions AUTO_INCREMENT = 1');


        Intervention::insert([
            ['id_intervention'=> 1, 'num_salle' => 1,'num_intervenant' =>  6, 'date_heure' => '2019-11-24 09:00:00', 'motif' => 'Nettoyage de l\'amphi', 'created_at' => now(), 'updated_at' => now()],
            ['id_intervention'=> 2, 'num_salle' => 2, 'num_intervenant' =>  6, 'date_heure' => '2019-11-24 09:00:00', 'motif' => 'Nettoyage de la salle de réunion', 'created_at' => now(), 'updated_at' => now()],
            ['id_intervention'=> 3,  'num_salle' => 14, 'num_intervenant' => 30, 'date_heure' => '2019-11-25 10:00:00', 'motif' => 'Ajout de prises côté porte', 'created_at' => now(), 'updated_at' => now()],
            ['id_intervention'=> 4,  'num_salle' => 15, 'num_intervenant' => 30, 'date_heure' => '2019-11-25 10:00:00', 'motif' => 'Ajout de prises côté porte', 'created_at' => now(), 'updated_at' => now()],
            ['id_intervention'=> 5, 'num_salle' =>  16, 'num_intervenant' => 30, 'date_heure' => '2019-11-25 10:00:00', 'motif' => 'Ajout de prises côté porte', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
