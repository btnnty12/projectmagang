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
        Schema::create('rate_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('billboard_id')->constrained();
            $table->string('contract_duration');
            $table->enum('exclusivity_status', ['exclusive', 'shared']);
            $table->decimal('publish_cost', 15, 2);
            $table->decimal('target_sell_price', 15, 2);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rate_cards');
    }
};
