<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expos', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('title_fa')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_ar')->nullable();

            $table->text('description');
            $table->text('description_fa')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_ar')->nullable();

            $table->string('pic')->nullable();
            $table->string('video')->nullable();

            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();

            $table->unsignedBigInteger('history')->default(0);
            $table->unsignedBigInteger('type'); // 0 Temporary(start-end) or 1 Permanently
            $table->string('type_desc');

            $table->string('theme');


            $table->unsignedTinyInteger('status'); // 0 saved or 1 published

            $table->timestamps();

            $table->foreignId('expo_category_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('expos');
    }
}
