<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('short_text')->nullable();
            $table->longText('full_text')->nullable();
            $table->foreignId('category_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
