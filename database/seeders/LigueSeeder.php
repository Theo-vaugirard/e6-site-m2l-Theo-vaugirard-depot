<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ligue;
use Illuminate\Support\Facades\DB;

class LigueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('ALTER TABLE ligues AUTO_INCREMENT = 1');


        Ligue::insert([
            ['nom'=>'Tennis','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Natation','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Football','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Plongé','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Kayak','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Bowling','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Tennis de table','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Volley ball','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Aquagym','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Rugby','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Board','created_at'=>now(),'updated_at'=>now()],
            ['nom'=>'Planche à voile','created_at'=>now(),'updated_at'=>now()]
        ]);
    }
}
