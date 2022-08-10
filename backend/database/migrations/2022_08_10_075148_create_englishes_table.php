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
        Schema::create('englishes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('page');
            $table->string('group');
            $table->string('attribute');
            $table->string('english');
            $table->string('deutsch');
            $table->string('russian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('englishes');
    }
};
