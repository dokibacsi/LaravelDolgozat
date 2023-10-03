<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date')->nullable();
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit');
            $table->timestamps();

        });

        Event::create([
            'date' => '2023.06.20',
            'agency_id' => 2,
            'limit' => 90
        ]);

        Event::create([
            'date' => '2022.10.12',
            'agency_id' => 1,
            'limit' => 120
        ]);

        Event::create([
            'date' => '2020.02.12',
            'agency_id' => 3,
            'limit' => 100
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
