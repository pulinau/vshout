<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('volunteers_events', function (Blueprint $table) {
            $table->unsignedInteger('volunteer_id');
            $table->unsignedInteger('event_id');
            $table->timestamps();

            $table->primary(['volunteer_id','event_id']);

            $table->foreign('volunteer_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('event_id')
                  ->references('id')->on('events')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
        
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('volunteers_events');
    }
}
