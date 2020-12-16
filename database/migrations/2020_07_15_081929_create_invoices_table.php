<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')->nullable();

            $table->decimal('price', 8, 2);
            $table->string('price_unit')->nullable();

            $table->string('bankName');
            $table->string('bankCode');

            $table->unsignedTinyInteger('status');
            $table->unsignedTinyInteger('type'); // 0->cat, 1=>expo

            $table->string('item_name')->default(""); // expo or cat name
            $table->unsignedInteger('item_id')->nullable(); // expo or cat id

            $table->timestamps();

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
        Schema::dropIfExists('invoices');
    }
}
