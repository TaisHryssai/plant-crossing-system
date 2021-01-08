<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_feature', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('plant_id')->index();
            $table->foreign('plant_id')
            ->references('id')
            ->on('plants')
            ->onDelete('cascade');
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
        Schema::dropIfExists('plant_feature');
    }
}
