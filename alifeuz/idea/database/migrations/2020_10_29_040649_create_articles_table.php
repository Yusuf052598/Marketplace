<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->integerIncrements('id');
            $table->string('name','191');
            $table->string('last_name','191');
            $table->string('username','191');
            $table->string('phone','191');
            $table->string('email','191');
            $table->string('tg_nick','191');
            $table->string('theme','191');
            $table->string('tg_canal','191');
            $table->string('fac_canal','191');
            $table->string('insta_canal','191');
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
        Schema::dropIfExists('articles');
    }
}
