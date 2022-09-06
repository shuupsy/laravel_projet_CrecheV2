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
        Schema::create('profilenfants', function (Blueprint $table) {
            $table->id();
            $table->foreignId("backaccueil_id")->constrained();
            $table->string("nutritional");
            $table->string("picturePermission");
            $table->string("exitPermission");
            $table->string("allergy");
            $table->string("size");
            $table->string("weight");
            $table->string("surveillanceSelles");
            $table->string("teething");
            $table->string("presence");
            $table->string("dayOfPresence");
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
        Schema::dropIfExists('profilenfants');
    }
};
