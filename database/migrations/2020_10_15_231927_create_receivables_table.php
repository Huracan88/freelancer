<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivablesTable extends Migration
{
    public function up()
    {
        Schema::create('receivables', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->enum('type',['debit','credit'])->default('debit');
            $table->foreignId('project_id')->constrained();
            $table->foreignId('budget_id')->nullable()->constrained();
            $table->date('date');
            $table->decimal('amount', 13,2);
            $table->string('comments')->nullable();
            $table->date('due_date')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('receivables');
    }
}
