<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 100)->nullable();
            $table->string('StazionePartenza', 100);
            $table->string('StazioneArrivo', 100);
            $table->date('OrarioPartenza');
            $table->date('OrarioArrivo');
            $table->string('CodiceTreno', 6);
            $table->tinyInteger('NumeroCarrozza')->default(8);
            $table->boolean('InOrario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
