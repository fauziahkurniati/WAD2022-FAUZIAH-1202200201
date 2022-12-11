<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\user_fauziah;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fauziah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',255);
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('no_hp',255);
            $table->boolean('level')->nullable();
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
        Schema::dropIfExists('user_fauziah');
    }
};
