<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categories_id');
            $table->string('title')->nullable()->default('no_image');
            $table->string('Author')->nullable()->default('no_image');
            $table->integer('pagenumber')->nullable()->default(00000);
            $table->string('bio',3000)->nullable()->default('no_image');
            $table->string('image')->nullable()->default('no_image');
            $table->integer('price')->nullable()->default('000');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.zr
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
