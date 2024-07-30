<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_features', function (Blueprint $table) {
            $table->id();
            $table->string('blog_feature_banner_title');
            $table->longText('blog_feature_banner_short_desc');
            $table->string('blog_feature_banner_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_features');
    }
};
