<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostsEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts_events', function (Blueprint $table) {
            $table->unsignedInteger('host_id');
            $table->unsignedInteger('event_id');
            $table->timestamps();

            $table->primary(['host_id','event_id']);

            $table->foreign('host_id')
                  ->references('id')->on('users')
                  ->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('event_id')
                  ->references('id')->on('events')
                  ->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('hosts_events');
    }
}
