<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('vip')->default(0);
            $table->timestamps();
        });

        User::create([
            'name' => 'Pipisi',
            'email' => 'pipisi@offline.com',
            'vip' => false
        ]);

        User::create([
            'name' => 'Isipip',
            'email' => 'isipip@online.com',
            'vip' => false
        ]);

        User::create([
            'name' => 'Pipis Isti',
            'email' => 'pipiS.Isti@on-off-line.com',
        ]);
    }

    
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
