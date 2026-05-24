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
        Schema::create('validations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('billboard_id')->constrained();
            $table->foreignId('validated_by')->constrained('users');
            $table->boolean('coordinate_valid');
            $table->boolean('photo_valid');
            $table->boolean('data_valid');
            $table->enum('validation_status', ['pending', 'valid', 'rejected']);
            $table->text('notes');
            $table->timestamp('validated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validations');
    }
};
