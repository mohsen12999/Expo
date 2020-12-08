<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');

            $table->string('file');

            $table->unsignedTinyInteger('type'); // 0 question, 1 answer
            $table->unsignedTinyInteger('status');

            $table->timestamps();

            $table->foreignId('ticket_id')->nullable()->constrained();
            $table->foreignId('sender_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
