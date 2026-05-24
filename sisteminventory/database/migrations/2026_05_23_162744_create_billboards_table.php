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
        Schema::create('billboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('area_id')->constrained();
            $table->foreignId('vendor_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('location_description');
            $table->string('view_from');
            $table->string('view_to');
            $table->decimal('length', 5, 2);
            $table->decimal('height', 5, 2);
            $table->string('billboard_type');
            $table->string('orientation');
            $table->integer('construction_side');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->text('nearby_poi');
            $table->bigInteger('traffic_volume');
            $table->bigInteger('total_population');
            $table->decimal('external_score', 5, 2);
            $table->string('photo');
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billboards');
    }
};
