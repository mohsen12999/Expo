<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('title_fa')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_ar')->nullable();

            $table->text('description')->nullable();
            $table->string('description_fa')->nullable();
            $table->string('description_ru')->nullable();
            $table->string('description_ar')->nullable();

            $table->string('pic');
            $table->unsignedTinyInteger('status');

            $table->timestamps();

            $table->foreignId('booth_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
