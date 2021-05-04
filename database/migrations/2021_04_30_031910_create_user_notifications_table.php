<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_notifications', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('notification_type_id')->unsigned();
            $table->text('content')->nullable();
            $table->boolean('is_viewed')->nullable()->default(0);
            $table->integer('elapsed_hours')->default(0);
            $table->integer('elapsed_minutes')->default(0);
            $table->integer('elapsed_seconds')->default(0);
            //Llave foranea, notification_type
            /*$table->foreign('user_id')->references('id')
                ->on('subjects')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('subject_id')->references('id')
                ->on('subjects')->onDelete('cascade')->onUpdate('cascade');*/
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
        Schema::dropIfExists('user_notifications');
    }
}
