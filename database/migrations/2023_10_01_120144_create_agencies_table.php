<?php

use App\Models\Agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        Agency::create([
            'name' => 'Trouble Agencies',
            'country' => 'Canada',
            'type' => "sos"
        ]);

        Agency::create([
            'name' => 'DeutscheNabh Agencies',
            'country' => 'Berlin',
            'type' => "sos"
        ]);

        Agency::create([
            'name' => 'Hírügynökésg',
            'country' => 'Magyarország',
            'type' => "Hírek"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
