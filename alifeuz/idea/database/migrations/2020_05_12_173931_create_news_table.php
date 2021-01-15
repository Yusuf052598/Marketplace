<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->integerIncrements('id');
            $table->unsignedInteger('category_id')->nullable()->index();
            $table->jsonb('title');
            $table->jsonb('subtitle');
            $table->jsonb('content_name');
            $table->longText('img');
            $table->integer('read_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->enum('status',['active','inactive']);
            $table->enum('featured',['0','1']);
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
        Schema::dropIfExists('news');
    }
}
