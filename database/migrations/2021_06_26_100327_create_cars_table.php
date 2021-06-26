<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->unsignedBigInteger('car_brand_id');
            $table->unsignedBigInteger('car_category_id');
            $table->unsignedBigInteger('car_color_id');
            $table->integer('harga');
            $table->boolean('type_car')->comment('0: manual, 1: matic');
            $table->string('tahun');
            $table->string('cc');
            $table->integer('jarak');
            $table->text('deskripsi');
            $table->string('nama_pemilik')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
