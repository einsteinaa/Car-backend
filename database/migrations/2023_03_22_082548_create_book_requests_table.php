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
        Schema::create('book_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookday_id');
            $table->unsignedBigInteger('client_id');
            $table->foreign('bookday_id')->references('id')->on('bookdays')->onDelete('cascade')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->date('reservation_date');
            $table->string('reservation_day');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('book_requests');
    }
};
