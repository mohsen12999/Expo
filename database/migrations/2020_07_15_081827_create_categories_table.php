<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('title_fa')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_ar')->nullable();

            $table->text('description');
            $table->text('description_fa')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_ar')->nullable();

            $table->string('pic');

            $table->decimal('price', 8, 2)->default(0);

            $table->unsignedTinyInteger('status'); // 0 don't show in main page, 1 show in main page

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
        Schema::dropIfExists('categories');
    }
}
