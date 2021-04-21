<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UniversityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitys', function (Blueprint $table) {
            $table->id();
            $table->string('university');
            $table->string('correct_name');
            $table->string('url');
            $table->string('address');
            $table->string('address_line1');
            $table->string('address_line2');
            $table->string('region');
            $table->string('zip_code');
            $table->string('country');
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
        Schema::dropIfExists('universitys');
    }
}
