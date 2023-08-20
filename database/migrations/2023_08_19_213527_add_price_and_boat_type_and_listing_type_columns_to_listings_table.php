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
      Schema::table('listings', function (Blueprint $table) {
        $table->decimal('price', 8, 2)->after('description');
        $table->string('boat_type')->after('class');
        $table->string('listing_type')->after('marina');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('listings', function (Blueprint $table) {
        $table->dropColumn('price');
        $table->dropColumn('boat_type');
        $table->dropColumn('listing_type');
      });
    }
};
