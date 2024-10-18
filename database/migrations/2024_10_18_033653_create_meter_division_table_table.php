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
        Schema::create('meter_division_table', function (Blueprint $table) {
            $table->integer('division_id')->primary()->autoIncrement();
            $table->string('division_code', 255);
            $table->string('division_name', 255);
            $table->timestamp('created_at')->nullable()->default('DEFAULT NULL');
            $table->integer('created_by_user_idx')->nullable()->default('DEFAULT NULL');
            $table->timestamp('updated_at')->nullable()->default('DEFAULT NULL');
            $table->integer('modified_by_user_idx')->nullable()->default('DEFAULT NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_division_table');
    }
};
