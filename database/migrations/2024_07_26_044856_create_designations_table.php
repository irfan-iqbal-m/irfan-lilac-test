<?php

use App\Models\Designation;
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
        Schema::create('designations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        $designations = [
            ['name' => 'Marketing Manager'],
            ['name' => 'Mobile Application Dev.'],
            ['name' => 'Designation 1'],
            ['name' => 'Designation 2'],
            ['name' => 'Designation 3'],
            ['name' => 'Designation 4'],
        ];

        foreach ($designations as $designation) {
            Designation::create($designation);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designations');
    }
};
