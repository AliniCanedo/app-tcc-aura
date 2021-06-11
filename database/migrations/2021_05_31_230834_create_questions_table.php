<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_classification');
            $table->foreign('id_classification')->references('id')->on('classifications')->onDelete('cascade');
            $table->unsignedBigInteger('id_modelo');
            $table->foreign('id_modelo')->references('id')->on('modelos')->onDelete('cascade');
            $table->string('description');
            $table->text('tooltip');
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
        Schema::dropIfExists('questions');
    }
}
