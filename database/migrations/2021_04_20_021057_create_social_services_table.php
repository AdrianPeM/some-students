<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_services', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->string('organization')->default('Sin especificar');
            $table->string('program')->default('Sin especificar');
            $table->integer('hours_add');
            $table->integer('accum_hours')->default(0);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('social_services');
    }
}
