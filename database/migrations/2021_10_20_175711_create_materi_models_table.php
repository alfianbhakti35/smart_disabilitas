<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi_models', function (Blueprint $table) {
            $table->id();
            $table->integer('matkul_id');
            $table->string('judul_materi');
            $table->string('materi_tunarungu');
            $table->string('materi_tunanetra');
            $table->string('materi_slowlearning');
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
        Schema::dropIfExists('materi_models');
    }
}
