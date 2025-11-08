<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('lookbook_items', function (Blueprint $table) {
            $table->id();
            $table->string('media_path'); // Đường dẫn video hoặc ảnh
            $table->enum('media_type', ['video', 'image']); // Loại media
            $table->integer('position'); // 1=video chính, 2=ảnh 1, 3=ảnh 2
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lookbook_items');
    }
};
