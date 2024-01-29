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
        Schema::create('tt_quality_concerns', function (Blueprint $table) {
            $table->string('id', 191)->primary();
            $table->date('tanggal');
            $table->string('no_reg', 191);
            $table->string('section', 191);
            $table->string('line', 191);
            $table->string('proses', 191);
            $table->string('model', 191);
            $table->string('part_no', 191);
            $table->string('prod_name', 191);
            $table->text('konten_ng');
            $table->text('rootcause_ng');
            $table->string('source', 191);
            $table->string('penyebab', 191);
            $table->string('kelolosan', 191);
            $table->integer('ng_qty');
            $table->string('sortir', 191);
            $table->string('sortir_result', 191);
            $table->string('close_open', 191);
            $table->string('progress', 191);
            $table->string('pic', 191);
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
        Schema::dropIfExists('tt_quality_concerns');
    }
};
