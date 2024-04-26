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
        Schema::create('tb_pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('pengunjung');
            $table->timestamp('waktu_kunjungan');
            $table->unsignedBigInteger('blog_id');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pengunjung');
    }
};
