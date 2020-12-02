<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamacao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamcao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('tipoProblema',50)->nullable();
			$table->string('localProblema',50)->nullable();
			$table->string('descricaoProblema',200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamcao');
    }
}
