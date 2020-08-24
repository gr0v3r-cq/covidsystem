<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('slug', 50)->unique();
            $table-> string('title', 67);
            $table-> string('description', 155);
            $table-> string('name', 50);
            $table-> text('description_categories');
            $table-> string('url_image', 100)->default('foto.jpg');
            $table-> integer('views')->default(0);
            $table-> integer('order')->default(0);
            $table-> boolean('cover_page')->default(0);
            $table-> boolean('state')->default(1);
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
        Schema::dropIfExists('categories');
    }
}
