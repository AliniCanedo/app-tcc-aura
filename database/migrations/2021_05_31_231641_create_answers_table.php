<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_matricula');
            $table->foreign('id_matricula')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('id_classification');
            $table->foreign('id_classification')->references('id')->on('classifications')->onDelete('cascade'); 
            $table->boolean('nao_sabe')->default(0);
            $table->boolean('nao_aplica')->default(0);
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
        Schema::dropIfExists('answers');
    }
}
