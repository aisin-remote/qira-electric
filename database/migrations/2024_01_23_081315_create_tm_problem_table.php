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
        Schema::create('tm_problem', function (Blueprint $table) {
            $table->id();
            $table->string('part_number', 191);
            $table->string('pcr_number', 191);
            $table->string('part_name', 191);
            $table->string('status', 191);
            $table->string('PIC', 191);
            $table->text('content_change');
            $table->text('note');
            $table->text('progress');
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
        Schema::dropIfExists('tm_problem');
    }
};
