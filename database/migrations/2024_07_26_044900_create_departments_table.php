<?php

use App\Models\Department;
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
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $Department = new Department();
        $Department->name = 'Sales and marketing';
        $Department->save();
        $Department = new Department();
        $Department->name = 'Application developement';
        $Department->save();
        $Department = new Department();
        $Department->name = 'Department 1';
        $Department->save();
        $Department = new Department();
        $Department->name = 'Department 2';
        $Department->save();
        $Department = new Department();
        $Department->name = 'Department 3';
        $Department->save();

        Department::factory()->count(4)->create();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
