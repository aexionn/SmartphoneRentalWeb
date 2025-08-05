<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id('device_id');
            $table->string('brand');
            $table->string('model');
            // $table->unsignedBigInteger('ref_id')->index()->nullable();
            $table->string('image');
            $table->decimal('price', total: 10, places: 2);
            $table->enum('condition', ['Baru', 'Bekas']);
            $table->timestamps();
            // $table->foreign('ref_id')->references('spec_id')->on('specifications')->onDelete('cascade');
        });

        // Schema::table('devices', function (Blueprint $table) {
        // });

        Schema::create('specifications', function (Blueprint $table) {
            $table->id('spec_id');
            $table->string('display');
            $table->string('processor');
            $table->string('ram');
            $table->string('storage');
            $table->string('camera');
            $table->string('battery');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
        Schema::dropIfExists('specifications');
    }
};
