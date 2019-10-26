<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bios', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('name')->nullable();
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('sex')->nullable();
            $table->string('bio_id');
            $table->string('phone')->nullable();
            $table->string('nationality')->nullable();
            $table->text('completed_contracts')->nullable();
            $table->text('ongoing_contracts')->nullable();
            $table->string('dispatchment_location')->nullable();
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
        Schema::dropIfExists('bios');
    }
}
