<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserExpoPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_expo_packages', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();

            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();

            $table->unsignedTinyInteger('type');
            $table->unsignedTinyInteger('status'); // 0 unused, 1 used

            $table->unsignedTinyInteger('booth_id')->nullable();

            $table->timestamps();

            // $table->foreignId('booth_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('package_id')->nullable()->constrained();
            $table->foreignId('invoice_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_expo_packages');
    }
}
