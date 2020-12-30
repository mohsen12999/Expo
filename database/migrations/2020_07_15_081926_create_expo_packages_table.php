<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpoPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expo_packages', function (Blueprint $table) {
            $table->id();
            $table->string('pic');

            $table->string('title');
            $table->text('description')->nullable();

            $table->unsignedTinyInteger('video_time')->nullable();
            $table->unsignedTinyInteger('video_count')->nullable();
            $table->unsignedTinyInteger('video_size')->nullable();
            $table->unsignedTinyInteger('photo_count')->nullable();
            $table->unsignedTinyInteger('photo_size')->nullable();
            $table->unsignedTinyInteger('catalog_page')->nullable();
            $table->unsignedTinyInteger('catalog_size')->nullable();

            $table->string('color')->default("");

            $table->unsignedTinyInteger('type');
            $table->unsignedTinyInteger('status');

            $table->unsignedTinyInteger('duration', 0);
            $table->decimal('price', 8, 2);

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
        Schema::dropIfExists('expo_packages');
    }
}
