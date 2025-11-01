<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Intervenant;
use Illuminate\Support\Facades\DB;


class IntervenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('ALTER TABLE intervenants AUTO_INCREMENT = 1');


        Intervenant::insert([
        ['numero_intervenant' => 1,'nom' => 'Renault','prenom' =>'Esteban', 'telephone' =>  979873142, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 2, 'nom' => 'Bouchet','prenom' => 'Katell','telephone' =>   871444782,'societe_siret' =>  '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 3, 'nom' => 'Launay', 'prenom' =>'Diego', 'telephone' =>  157367282, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 4, 'nom' => 'Gillet', 'prenom' =>'Arthur','telephone' =>   579338483, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 5, 'nom' => 'Thomas', 'prenom' =>'Maryam', 'telephone' =>  283762199, 'societe_siret' => '11227435344355','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 6, 'nom' => 'Cohen', 'prenom' =>'Mathieu', 'telephone' =>  177793947, 'societe_siret' => '24113495658294','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 7, 'nom' => 'Masse', 'prenom' =>'Océane', 'telephone' =>  437878375, 'societe_siret' => '84758493693252','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 8, 'nom' => 'Vaillant', 'prenom' =>'Grégory', 'telephone' =>  647168649, 'societe_siret' => '24113495658294','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 9, 'nom' => 'Carpentier','prenom' => 'Dimitri','telephone' =>   972221198, 'societe_siret' => '84758493693252','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 10, 'nom' => 'Lebrun','prenom' => 'Noémie', 'telephone' =>  776974322, 'societe_siret' => '11227435344355','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 11, 'nom' => 'Maury', 'prenom' =>'Marie', 'telephone' =>  756293341, 'societe_siret' => '45931398235323','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 12, 'nom' => 'Lebon', 'prenom' =>'Jordan','telephone' =>   656325696, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 13, 'nom' => 'Hubert','prenom' => 'Rémi', 'telephone' =>  697996679, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 14, 'nom' => 'Moulin', 'prenom' =>'Bruno', 'telephone' =>  169816442, 'societe_siret' => '45931398235323','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 15, 'nom' => 'Chapuis','prenom' => 'Jordan','telephone' =>   945991665, 'societe_siret' => '24113495658294','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 16, 'nom' => 'Blondeau','prenom' => 'Anna', 'telephone' =>  442436759, 'societe_siret' => '24113495658294','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 17, 'nom' => 'Bonnet', 'prenom' =>'Léane', 'telephone' =>  752466418, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 18, 'nom' => 'Parmentier', 'prenom' =>'Thibault', 'telephone' =>  398213423, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 19, 'nom' => 'Petit', 'prenom' =>'Gilbert','telephone' =>   449557599, 'societe_siret' => '45931398235323','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 20, 'nom' => 'Loiseau', 'prenom' =>'Chloé','telephone' =>   883568826, 'societe_siret' => '45931398235323','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 21, 'nom' => 'Maillard', 'prenom' =>'Hugo', 'telephone' =>  636143732, 'societe_siret' => '45931398235323','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 22, 'nom' => 'Raymond', 'prenom' =>'Bruno','telephone' =>   884884976, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 23, 'nom' => 'Thiery', 'prenom' =>'Tatiana','telephone' =>   922211885, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 24, 'nom' => 'Perrin', 'prenom' =>'Evan','telephone' =>   433893478, 'societe_siret' => '11227435344355','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 25, 'nom' => 'Courtois','prenom' => 'Constant', 'telephone' =>  733679865, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 26, 'nom' => 'Alves', 'prenom' =>'Dorian', 'telephone' =>  295731364, 'societe_siret' => '84758493693252','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 27, 'nom' => 'Baron', 'prenom' =>'Émilie','telephone' =>   276572394, 'societe_siret' => '84758493693252','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 28, 'nom' => 'Charpentier', 'prenom' =>'Laura', 'telephone' =>  261764844, 'societe_siret' => '11339481784751','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 29, 'nom' => 'Laroche', 'prenom' =>'Margaux', 'telephone' =>  523962196, 'societe_siret' => '11227435344355','created_at' => now(),'updated_at' => now()],
        ['numero_intervenant' => 30, 'nom' => 'Arnaud', 'prenom' =>'Fanny', 'telephone' =>  893123293, 'societe_siret' => '45898745814175','created_at' => now(),'updated_at' => now()]
        ]);
    }
}
