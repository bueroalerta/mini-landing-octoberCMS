<?php namespace Eyarij\Landing\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('eyarij_landing_subscribers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eyarij_landing_subscribers');
    }
}
