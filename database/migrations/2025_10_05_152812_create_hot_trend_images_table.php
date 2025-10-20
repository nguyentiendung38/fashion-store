<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('hot_trend_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hot_trend_id')->constrained()->onDelete('cascade'); // liên kết bảng hot_trends
            $table->string('image'); // ảnh bổ sung, nullable nếu muốn
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hot_trend_images');
    }
};
