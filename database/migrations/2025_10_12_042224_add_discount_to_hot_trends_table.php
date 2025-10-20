<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('hot_trends', function (Blueprint $table) {
            $table->unsignedTinyInteger('discount')->default(0)->after('price'); // giảm giá %
        });
    }

    public function down()
    {
        Schema::table('hot_trends', function (Blueprint $table) {
            $table->dropColumn('discount');
        });
    }
};
