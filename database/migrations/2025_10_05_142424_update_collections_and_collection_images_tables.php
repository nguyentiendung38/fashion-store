<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Sửa bảng collections
        Schema::table('collections', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change(); // NOT NULL
        });

        // Sửa bảng collection_images
        Schema::table('collection_images', function (Blueprint $table) {
            $table->string('image')->nullable()->change(); // NULL được phép
        });
    }

    public function down(): void
    {
        // Quay lại trạng thái cũ
        Schema::table('collections', function (Blueprint $table) {
            $table->string('image')->nullable()->change(); // về nullable
        });

        Schema::table('collection_images', function (Blueprint $table) {
            $table->string('image')->nullable(false)->change(); // NOT NULL
        });
    }
};
