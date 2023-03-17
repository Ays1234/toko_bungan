<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrousel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('banner');
            $table->enum('type_device', ['desktop', 'mobile']);
            // $table->enum('status', ['active', 'disable']);
            $table->char('id_staff', 40);
            $table->timestamp('last_login')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrousel');
    }
}
