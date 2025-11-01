<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Salle;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salle::insert([
            ['numero_salle' => 1, 'nom'=>'amphithéatre','capacite'=> 200, 'equipements'=>'4 prises éthernet de catégorie 5, système de vidéo projection sur grand écran, 1 prise éthernet régie','services'=> NULL, 'batiment'=>'B', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>2,  'nom'=>'baccarat ','capacite'=>40, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>3,  'nom'=>'corbin', 'capacite'=>50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>4,  'nom'=>'daum', 'capacite'=>30,'equipements'=> 'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>5,  'nom'=>'gallé', 'capacite'=>12,'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'A', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>6,  'nom'=>'grüber','capacite'=> 24,'equipements'=> 'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL,'batiment'=> 'C', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>7,  'nom'=>'lamour','capacite'=> 50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'B', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>8,  'nom'=>'longwy','capacite'=> 40, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'B', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>9,  'nom'=>'marjorelle','capacite'=> 50, 'equipements'=>'une prise ethernet (catégorie 5 ou 6), système de vidéo projection', 'services'=>NULL, 'batiment'=>'D', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>10,  'nom'=>'multimédia', 'capacite'=>24, 'equipements'=>'24 ordinateurs, 26 prises ethernet, 1 PC formateur, 1 imprimante réseau', 'services'=>NULL, 'batiment'=>'B', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>11,  'nom'=>'restauration et convivialité', 'capacite'=>0, 'equipements'=>'digicode','services'=> 'aménagement, fourniture eau café ,etc..','batiment'=>'D', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>12,  'nom'=>'Salle de services', 'capacite'=>0, 'equipements'=>NULL, 'services'=>NULL, 'batiment'=>'B', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>13,  'nom'=>'Aucune information','capacite'=> 0, 'equipements'=>NULL, 'services'=>NULL,'batiment'=> '0', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>14,  'nom'=>'Administration M2L 1','capacite'=> 0, 'equipements'=>NULL, 'services'=>NULL,'batiment'=> 'C', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>15,  'nom'=>'Administration M2L 2', 'capacite'=>0, 'equipements'=>NULL, 'services'=>NULL, 'batiment'=>'C', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>16,  'nom'=>'Administration M2L 3','capacite'=> 0,'equipements'=>NULL, 'services'=>NULL,'batiment'=> 'C', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>17,  'nom'=>'cuisine','capacite'=> 0,'equipements'=> NULL, 'services'=>NULL,'batiment'=> 'D', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>18,  'nom'=>'reprographie', 'capacite'=>0,'equipements'=> NULL,'services'=> NULL, 'batiment'=>'D', 'created_at' => now(), 'updated_at' => now()],
            ['numero_salle' =>25,  'nom'=>'Nouvelle', 'capacite'=>15, 'equipements'=>'vidéo projecteur', 'services'=>'nettoyage', 'batiment'=>'0', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }
}
