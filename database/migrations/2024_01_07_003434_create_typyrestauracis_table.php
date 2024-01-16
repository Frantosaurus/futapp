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
        Schema::create('typyrestauraci', function (Blueprint $table) {
            $table->id();
            $table->string('typ_restaurace');
            $table->timestamps();
        });

        DB::table('typyrestauraci')->insert([
            ['typ_restaurace' => 'Asijská restaurace'],
            ['typ_restaurace' => 'Indická restaurace'],
            ['typ_restaurace' => 'Česká restaurace'],
            ['typ_restaurace' => 'Kebab'],
            ['typ_restaurace' => 'Italská restaurace'],
            ['typ_restaurace' => 'Fastfood'],
            ['typ_restaurace' => 'Mexická restaurace'],
            ['typ_restaurace' => 'Menza'],
        ]);

        Schema::create('konkretni_restaurace', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('typ_id');
            $table->string('nazev');
            $table->string('mapa')->nullable();
            $table->string('adresa');
            $table->string('telefon')->nullable();
            $table->timestamps();

            $table->foreign('typ_id')->references('id')->on('typyrestauraci')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konkretni_restaurace');
        Schema::dropIfExists('typyrestauraci');
    }
};
