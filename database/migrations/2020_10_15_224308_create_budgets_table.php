<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBudgetsTable extends Migration
{
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->foreignId('project_id')->constrained();
            $table->string('title',150);
            $table->string('description',500)->nullable();
            $table->date('date');
            $table->date('approved_date')->nullable();
            $table->date('started_date')->nullable();
            $table->unsignedInteger('estimated_days')->nullable();
            $table->enum('status',['created','development','completed','canceled'])->default('created');
            $table->foreignId('budget_id');
            $table->text('foot_notes');
            $table->text('comments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
