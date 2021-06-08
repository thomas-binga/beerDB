<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeerDBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beer_d_b_s', function (Blueprint $table) {
            $table->id();
            $table->text('Nom_Biere');
            $table->double('Prix_Biere');
            $table->int('Contenance_Biere');
            $table->double('Degre_alccol_Biere');
            $table->text('Description');
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
        Schema::dropIfExists('beer_d_b_s');
    }
}
