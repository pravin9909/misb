<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->foreignId('category_id')->constrained('news_categories')->onDelete('cascade');
            $table->string('blog_slug')->unique();
            $table->text('description');
            $table->string('main_image')->nullable();
            $table->string('video_url')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->foreignId('author_id')->constrained('users');
            $table->string('tags')->nullable();
            $table->string('created_by');
            $table->timestamp('created_date')->useCurrent();
            $table->string('updated_by')->nullable();
            $table->timestamp('updated_date')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
