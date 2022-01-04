<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kps',100);
            $table->string('email_kps',100)->unique();
            $table->string('alamat_kps',250);
            $table->string('hp_kps',13);
            $table->char('th_masuk_kps',4);
            $table->char('jk_kps',1);
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
        Schema::dropIfExists('kps');
    }
}
