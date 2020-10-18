<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConceptsTable extends Migration
{
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('budget_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->decimal('hour_rate',13,2)->default(0);
            $table->unsignedInteger('estimated_hours')->default(0);
            $table->decimal('amount',13,2)->default(0);
            $table->enum('development_status',['pending','development','implemented'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('concepts');
    }
}
