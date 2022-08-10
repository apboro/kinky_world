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
        Schema::create('kinkbnb_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kinkbnb_object_id')->constrained('kinkbnb_objects')->onDelete('cascade');
            $table->foreignId('request_from_user_id')->constrained('users', 'id')->onDelete('cascade');
            $table->string('status');
            $table->string('qr_code');
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
        Schema::dropIfExists('kinkbnb_transactions');
    }
};
