<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpoImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expo_images', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->string('path');

            $table->unsignedTinyInteger('status')->default(0); // 0 add, 1 accept

            $table->foreignId('expo_id')->nullable()->constrained();

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
        Schema::dropIfExists('expo_images');
    }
}
