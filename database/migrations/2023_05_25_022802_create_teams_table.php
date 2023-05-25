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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->text('profile_picture');
            $table->string('fullname');
            $table->string('position');
            $table->string('link1_title')->nullable();
            $table->text('link1')->nullable();
             $table->string('link2_title')->nullable();
            $table->text('link2')->nullable();
             $table->string('link3_title')->nullable();
            $table->text('link3')->nullable();
             $table->string('link4_title')->nullable();
            $table->text('link4')->nullable();
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
        Schema::dropIfExists('teams');
    }
};
