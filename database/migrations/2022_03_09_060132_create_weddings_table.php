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
        Schema::create('weddings', function (Blueprint $table) {
            $table->id();
            $table->string('groom_name');
            $table->string('groom_last_name');
            $table->string('bride_last_name');
            $table->dateTime('wedding_date');
            $table->dateTime('ceremony_schedule');
            $table->dateTime('reception_schedule');
            $table->string('reception_type');
            $table->string('ceremony_adress');
            $table->string('ceremony_location');
            $table->string('reception_adress');
            $table->string('reception_location');
            $table->string('dresscode');
            $table->string('dresscode_notes');
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
        Schema::dropIfExists('weddings');
    }
};
