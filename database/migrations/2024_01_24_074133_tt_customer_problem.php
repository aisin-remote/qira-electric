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
        Schema::create('tt_customerProblem', function (Blueprint $table) {
            $table->string('id', 191)->primary();
            $table->string('line', 191);
            $table->string('problem', 191);
            $table->string('date_problem', 191);
            $table->string('customer', 191);
            $table->string('model', 191);
            $table->string('qty', 191);
            $table->string('process', 191);
            $table->string('date_process', 191);
            $table->string('status_problem', 191);
            $table->string('status_kaizen', 191);
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
        Schema::dropIfExists('tt_customerProblem');
    }
};
