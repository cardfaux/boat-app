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
      Schema::create('listings', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('marina')->nullable();
        $table->string('slipnumber')->nullable();
        $table->string('address');
        $table->string('address2')->nullable();
        $table->string('city');
        $table->string('state');
        $table->integer('zipcode')->unsigned();
        $table->string('class');
        $table->string('length');
        $table->string('seats')->default(1);
        $table->longText('description')->nullable();
        $table->text('slug');
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
      Schema::dropIfExists('listings');
    }
};
