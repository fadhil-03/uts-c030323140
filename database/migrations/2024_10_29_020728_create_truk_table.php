<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrukTable extends Migration
{
    public function up()
    {
        Schema::create('truk', function (Blueprint $table) {
            $table->id('id_truk');
            $table->string('nomor_truk', 20)->unique();
            $table->string('jenis_truk', 50);
            $table->decimal('kapasitas', 10, 2);
            $table->enum('status_truk', ['Tersedia', 'Dalam Perjalanan', 'Perawatan']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('truk');
    }
}