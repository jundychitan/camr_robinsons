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
        Schema::create('meter_site', function (Blueprint $table) {
            $table->integer('site_id')->primary()->autoIncrement();
            $table->integer('division_idx')->comment('The Value of this column is from division_table');
            $table->integer('company_idx')->comment('The Value of this column is from company_table');
            $table->integer('building_idx')->comment('The Value of this column is from meter_building_table');
            $table->string('site_code', 100)->nullable()->default('DEFAULT NULL')->comment('Building Code as Site Code');
            $table->integer('created_by_user_idx');
            $table->string('created_at', 30);
            $table->integer('modified_by_user_idx');
            $table->string('updated_at', 30);
            $table->string('last_log_update', 255);
            $table->string('deleted_at', 50)->nullable()->default('DEFAULT NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_site');
    }
};
