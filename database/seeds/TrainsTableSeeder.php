<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->Azienda = 'ITALO';             
        $train->StazionePartenza = 'ROMA'; 
        $train->StazioneArrivo = 'NAPOLI'; 
        $train->CodiceTreno = 'GF8T26'; 
        $train->NumeroCarrozza = 8; 
        $train->InOrario = true; 
        $train->Cancellato = true;

        $train->save();
    }
}
