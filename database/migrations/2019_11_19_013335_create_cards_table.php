<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->char('cards_id', 14);
            $table->foreign('cards_id')->references('nik')->on('citizens')->onDelete('cascade');
            $table->char('jenis_kelamin', 1);
            $table->string('alamat');
            $table->string('agama');
            $table->char('status_kawin', 1);
            $table->char('status_kerja', 1);
            $table->string('kewarganegaraan');
            $table->char('status_id', 1)->default(1);
            $table->string('city-created_at');
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
        Schema::dropIfExists('cards');
    }
}
