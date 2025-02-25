<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('loaimathang', function (Blueprint $table) {
            $table->boolean('TrangThai')->default(1)->after('tenloaimathang'); // Đặt sau cột 'tenloaimathang'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loaimathang', function (Blueprint $table) {
            //
            $table->dropColumn('TrangThai');
        });
    }
};
