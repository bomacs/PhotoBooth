<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->string('contact_no');
            $table->text('address');
            $table->string('event_type');
            $table->text('event_place');
            $table->unsignedBigInteger('photographer_id');
            $table->dateTime('date');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('photographer_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
