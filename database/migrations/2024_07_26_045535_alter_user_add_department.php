<?php

use App\Models\Department;
use App\Models\Designation;
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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('fk_department')->constrained('departments')->nullable();
            $table->foreignId('fk_designation')->constrained('designations')->nullable();
        });


        $user = new User();
        $user->name = 'Jhon Due';
        $user->phone_number = '123456789';
        $user->fk_department = Department::where('name', 'Sales and marketing')->first()->id;
        $user->fk_designation = Designation::where('name', 'Marketing Manager')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'Tommy Mark';
        $user->phone_number = '912345678';
        $user->fk_department = Department::where('name', 'Application developement')->first()->id;
        $user->fk_designation = Designation::where('name', 'Mobile Application Dev.')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'Jhon Due';
        $user->phone_number = '123456789';
        $user->fk_department = Department::where('name', 'Sales and marketing')->first()->id;
        $user->fk_designation = Designation::where('name', 'Marketing Manager')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'Tommy Mark';
        $user->phone_number = '912345678';
        $user->fk_department = Department::where('name', 'Application developement')->first()->id;
        $user->fk_designation = Designation::where('name', 'Mobile Application Dev.')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'User 1';
        $user->phone_number = '123456789';
        $user->fk_department = Department::where('name', 'Department 1')->first()->id;
        $user->fk_designation = Designation::where('name', 'Designation 1')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'User 2';
        $user->phone_number = '912345678';
        $user->fk_department = Department::where('name', 'Department 2')->first()->id;
        $user->fk_designation = Designation::where('name', 'Designation 2')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'User 3';
        $user->phone_number = '981234567';
        $user->fk_department = Department::where('name', 'Department 3')->first()->id;
        $user->fk_designation = Designation::where('name', 'Designation 3')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'User 4';
        $user->phone_number = '987123456';
        $user->fk_department = Department::where('name', 'Department 2')->first()->id;
        $user->fk_designation = Designation::where('name', 'Designation 1')->first()->id;
        $user->save();
        $user = new User();
        $user->name = 'User 5';
        $user->phone_number = '987612345';
        $user->fk_department = Department::where('name', 'Department 1')->first()->id;
        $user->fk_designation = Designation::where('name', 'Designation 2')->first()->id;
        $user->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('fk_department');
            $table->dropColumn('fk_designation');
        });
    }
};
