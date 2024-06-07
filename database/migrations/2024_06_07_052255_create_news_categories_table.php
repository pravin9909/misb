<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_title');
            $table->string('slug')->unique();
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
        Schema::dropIfExists('news_categories');
    }
}
