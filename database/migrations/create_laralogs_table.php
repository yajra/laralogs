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
        if (Schema::connection(config('laralogs.db_connection'))->hasTable('laralogs_logs')) {
            return;
        }

        Schema::connection(config('laralogs.db_connection'))->create('laralogs_logs', function (Blueprint $table) {
            $table->id();
            $table->string('source', 255)->nullable();
            $table->string('event', 255)->nullable();
            $table->string('ip_address', 255)->nullable();
            $table->string('user_agent', 255)->nullable();
            $table->nullableMorphs('authenticatable');
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
        Schema::connection(config('laralogs.db_connection'))->dropIfExists('laralogs_logs');
    }
};
