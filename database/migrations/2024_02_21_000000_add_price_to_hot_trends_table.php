<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('hot_trends', function (Blueprint $table) {
            $table->decimal('price', 10, 0)->default(0)->after('image');
        });
    }

    public function down()
    {
        Schema::table('hot_trends', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }
};
