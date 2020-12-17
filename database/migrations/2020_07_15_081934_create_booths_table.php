<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoothsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booths', function (Blueprint $table) {
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
            $table->string('theme')->nullable();

            $table->string('video')->nullable();
            $table->string('catalog')->nullable();

            $table->unsignedTinyInteger('status'); // 0 -> save, 1 -> active, 5 -> ended, 7 -> problem
            $table->string('status_description')->nullable();

            $table->unsignedBigInteger('visits')->default(0);

            $table->string('booth_map_id')->nullable();

            $table->timestamps();

            $table->foreignId('expo_package_id')->nullable()->constrained();
            $table->foreignId('theme_id')->nullable()->constrained();

            $table->foreignId('user_expo_package_id')->nullable()->constrained();
            $table->foreignId('expo_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();

            $table->unsignedTinyInteger('confirm')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booths');
    }
}
