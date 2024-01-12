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
    Schema::create('users', function (Blueprint $table) {
        $table->string('name');
        $table->string('last_name');
        $table->string('den')->nullable();
        $table->string('od_kdy')->nullable();
        $table->string('do_kdy')->nullable();
        $table->string('restaurant_type')->nullable();
        $table->string('restaurant_name')->nullable();
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
        Schema::dropIfExists('users');
    }
};
