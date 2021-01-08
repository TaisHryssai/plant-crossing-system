<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alleles', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->string('name');            
            $table->unsignedBigInteger('feature_id')->index();
            $table->foreign('feature_id')
            ->references('id')
            ->on('features')
            ->onDelete('cascade');
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
        Schema::dropIfExists('alleles');
    }
}
