<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('savings_package_id');
            $table->string('duration');
            $table->string('amount');
            $table->string('total_return');
            $table->dateTime('savings_date');
            $table->dateTime('return_date');
            $table->enum('status', ['active', 'pending', 'cancelled', 'settled']);
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
        Schema::dropIfExists('savings');
    }
}