<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers_values', function (Blueprint $table) {
            $table->foreignId('answer_id')->constrained()->onDelete('cascade');
            $table->foreignId('values_id')->constrained()->onDelete('cascade');
            $table->primary(['answer_id', 'values_id']); // Optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers_values');
    }
}
