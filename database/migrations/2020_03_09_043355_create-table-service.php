<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * rating for seo website
         */
        if (!Schema::hasTable('rating')) {
            Schema::create('rating', function (Blueprint $table) {
                $table->increments('id');
                $table->string('username', 40)->nullable();
                $table->string('avatar')->nullable();
                $table->timestamps();
            });
        }
        /**
         * table save category of website
         */
        if (!Schema::hasTable('category')) {
            Schema::create('category', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('slug')->nullable();
                $table->string('excerpt')->nullable();
                $table->string('thumbnail')->nullable();
                $table->string('background')->nullable();
                $table->string('description')->nullable();
                $table->string('site_name')->nullable();
                $table->string('image_seo')->nullable();
                $table->string('keyword_seo')->nullable(); /// từ khóa
                $table->string('description_seo')->nullable(); /// mô tả từ khóa
                $table->timestamps();
            });
        }
        /**
         * table save type product such as : category : quần áo -> type : áo thun 
         */
        if (!Schema::hasTable('category_type')) {
            Schema::create('category_type', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('slug')->nullable();
                $table->string('excerpt')->nullable();
                $table->string('thumbnail')->nullable();
                $table->string('background')->nullable();
                $table->string('description')->nullable();
                $table->unsignedInteger('category_id')->unsigned();
                $table->foreign('category_id')->references('id')->on('category')
                ->onDelete('CASCADE');
                $table->string('site_name')->nullable();
                $table->string('image_seo')->nullable();///save : web_image , og:image, ... NOT (alt title width height)
                $table->string('keyword_seo')->nullable(); /// từ khóa
                $table->string('description_seo')->nullable(); /// mô tả từ khóa
                $table->timestamps();
            });
        }
        /**
         * table save list product data
         */
        if (!Schema::hasTable('post')) {
            Schema::create('post', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title')->nullable();
                $table->string('slug')->nullable();  /// slug
                $table->string('excerpt')->nullable(); /// giá ban đầu
                $table->text('content')->nullable();
                $table->string('thumbnail')->nullable();
                $table->unsignedInteger('category_type_id')->unsigned();
                $table->integer('like')->default(1);
                $table->integer('view')->default(1);
                $table->integer('publish')->default(1);
                $table->string('site_name')->nullable();
                $table->text('image_seo')->nullable();///save : web_image , og:image, ...
                $table->text('keyword_seo')->nullable(); /// từ khóa
                $table->text('description_seo')->nullable(); /// mô tả từ khóa
                $table->timestamps();
            });
        }


        /**
         * rating for activity of product
         */
        if (!Schema::hasTable('rating_active')) {
            Schema::create('rating_active', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('post_id')->unsigned();
                $table->foreign('post_id')->references('id')->on('post')
                ->onDelete('CASCADE');
                $table->unsignedInteger('rating_id')->unsigned();
                $table->foreign('rating_id')->references('id')->on('rating')
                ->onDelete('CASCADE');
                $table->timestamps();
            });
        }
        /**
         * product style for product data have multi data search
         */
        if (!Schema::hasTable('category_style')) {
            Schema::create('category_style', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->string('slug')->nullable();
                $table->string('excerpt')->nullable();
                $table->string('thumbnail')->nullable();
                $table->string('background')->nullable();
                $table->string('description')->nullable();
                $table->string('site_name')->nullable();
                $table->string('image_seo')->nullable();
                $table->string('description_seo')->nullable();
                $table->string('keyword_seo')->nullable();
                $table->unsignedInteger('category_type_id')->unsigned();
                $table->timestamps();
            });
        }
        /**
         * product activity of product style
         */
        if (!Schema::hasTable('post_active_style')) {
            Schema::create('post_active_style', function (Blueprint $table) {
                $table->increments('id');
                $table->bigInteger('post_id')->nullable();
                $table->bigInteger('style_id')->nullable();
                $table->timestamps();
            });
        }
        /**
         * save image to db then render data seo website
         */
        if (!Schema::hasTable('picture')) {
            Schema::create('picture', function (Blueprint $table) {
                $table->increments('id');
                $table->string('src');
                $table->string('alt')->nullable();
                $table->string('width', 10)->nullable();
                $table->string('height', 10)->nullable();
                $table->string('title')->nullable();
                $table->string('galery')->nullable();
                $table->bigInteger('foreign_id');
                $table->string('table', 20);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picture');
        Schema::dropIfExists('post_active_style');
        Schema::dropIfExists('category_style');
        Schema::dropIfExists('post');
        Schema::dropIfExists('category_type');
        Schema::dropIfExists('category');
        Schema::dropIfExists('rating');
        Schema::dropIfExists('rating_active');
    }
}
