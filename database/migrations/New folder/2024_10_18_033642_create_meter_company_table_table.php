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
        Schema::create('meter_company_table', function (Blueprint $table) {
            $table->integer('company_id')->primary()->autoIncrement();
            $table->string('company_code', 255);
            $table->string('company_name', 255);
            $table->string('created_at', 50)->nullable()->default('DEFAULT NULL');
            $table->integer('created_by_user_idx')->nullable()->default('DEFAULT NULL');
            $table->string('updated_at', 50)->nullable()->default('DEFAULT NULL');
            $table->integer('modified_by_user_idx')->nullable()->default('DEFAULT NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_company_table');
    }
};
