<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table -> id();

            $table -> string('company', 50);
            $table -> string('start_station', 50);
            $table -> string('end_station', 50);
            $table -> dateTime('start_time');
            $table -> dateTime('end_time');
            $table -> string('train_code', 8) -> unique();
            $table ->integer('coach_number');
            $table -> boolean('in_time') -> default(true);
            $table -> boolean('deleted') -> default(false);


            // - azienda
            // - stazione di partenza
            // - stazione di arrivo
            // - orario di partenza
            // - orario di arrivo
            // - codice treno
            // - numero carrozze
            // - in orario
            // - cancellato


            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
};
