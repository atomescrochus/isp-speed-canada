<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('city_id');
            $table->bigInteger('postal_code_id');
            $table->bigInteger('provider_id');
            $table->string('type')->nullable();
            $table->float('advertised_speed_up', 8, 2)->nullable();
            $table->float('advertised_speed_down', 8, 2)->nullable();
            $table->float('reported_speed_up', 8, 2);
            $table->float('reported_speed_down', 8, 2);
            $table->string('reporter_ip');
            $table->boolean('satisfaction');
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
        Schema::dropIfExists('reports');
    }
}
