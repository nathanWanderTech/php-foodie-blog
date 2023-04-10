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
        Schema::create('fb_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('content');
            $table->bigInteger('author_id', false, true);
            $table->bigInteger('category_id', false, true);
            $table->string('thumbnail_photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fb_posts');
        Schema::table('fb_posts', function (Blueprint $table) {
            $table->dropColumn('thumbnail_photo');
        });
    }
};
