<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGiornopartenzaToTrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            //creare colonna giorno partenza nella tabella trains
             $table->date('GiornoPartenza')->nullable()->after('StazioneArrivo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //distruggo la colonna GiornoPartenza
            $table->dropColumn('GiornoPartenza');
        });
    }
}
