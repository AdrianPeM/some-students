<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialServiceReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_service_reports', function (Blueprint $table) {
            $table->id();
            $table->integer('report_number');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('hours')->nullable()->default(0);
            $table->string('report_type')->default('Bimestral');
            $table->unsignedBigInteger('social_service_id');
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
        Schema::dropIfExists('social_service_reports');
    }
}
