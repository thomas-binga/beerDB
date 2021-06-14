<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beers', function (Blueprint $table) {
            $table->id();
            $table->text('Nom');
            $table->double('Prix_biere');
            $table->int('Contenance_Biere');
            $table->double('Degre_alccol_Biere');
            $table->text('Description');
            $table->int('Id_Producteur');
            $table->int('Id_Style');
            $table->text('image_Biere');
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
        Schema::dropIfExists('beers');
    }
}
