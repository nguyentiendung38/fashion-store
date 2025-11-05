<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hero_images', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Đường dẫn ảnh
            $table->integer('position')->default(1); // Vị trí hiển thị (1-4)
            $table->string('alt_text')->nullable(); // Mô tả ảnh
            $table->boolean('is_active')->default(true); // Bật/tắt
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hero_images');
    }
};