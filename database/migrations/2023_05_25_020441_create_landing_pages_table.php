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
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->id();
            $table->text('logo');
            $table->text('hero_banner');
            $table->string('hero_title');
            $table->text('hero_desc');
            $table->string('hero_btn');
            $table->string('hero_btn_link');
            $table->string('section2_title');
            $table->text('footer_logo');
            $table->string('footer_title1');
            $table->string('footer_title2');
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
        Schema::dropIfExists('landing_pages');
    }
};
