<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_categories', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->charset = 'utf8';
                $table->collation = 'utf8_general_ci';
                $table->integerIncrements('id');
                $table->unsignedInteger('market_id')->index();
                $table->longText('name');
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
        Schema::dropIfExists('market_categories');
    }
}
