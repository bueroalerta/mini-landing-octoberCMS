<?php namespace Eyarij\Landing\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLandingsTable extends Migration
{
    public function up()
    {
        Schema::create('eyarij_landing_landings', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('message');
            $table->boolean('is_show')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eyarij_landing_landings');
    }
}
