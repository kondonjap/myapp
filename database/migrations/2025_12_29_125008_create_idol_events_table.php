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
        Schema::create('idol_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->date('event_date');
            $table->foreignId('venue_id')->constrained('idol_venues');
            $table->unsignedInteger('ticket_cost')->default(0);
            $table->unsignedInteger('drink_cost')->default(0);
            $table->text('note')->nullable();
            $table->timestamps();

            $table->index(['event_date']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('idol_events');
    }
};
