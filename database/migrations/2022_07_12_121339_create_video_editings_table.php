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
        Schema::create('video_editings', function (Blueprint $table) {
            $table->id();

            $table->string('judul')->nullable();
            $table->string('file')->nullable();
            $table->string('thumbnail')->nullable();
            // $table->string('kategori');

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
        Schema::dropIfExists('video_editings');
    }
};
