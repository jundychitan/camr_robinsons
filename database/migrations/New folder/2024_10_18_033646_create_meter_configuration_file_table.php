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
        Schema::create('meter_configuration_file', function (Blueprint $table) {
            $table->integer('config_id')->primary()->autoIncrement();
            $table->text('meter_model');
            $table->text('config_file');
            $table->string('created_by', 300);
            $table->string('date_created', 200);
            $table->string('modified_by', 200);
            $table->timestamp('date_modified')->nullable()->default('DEFAULT NULL');
            $table->integer('added_by');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_configuration_file');
    }
};
