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
        Schema::create('meter_rtu', function (Blueprint $table) {
            $table->integer('rtu_id')->primary()->autoIncrement();
            $table->integer('site_idx');
            $table->integer('location_idx')->nullable()->default('DEFAULT NULL');
            $table->string('site_code', 100)->nullable()->default('DEFAULT NULL');
            $table->string('gateway_sn', 255);
            $table->string('gateway_mac', 255);
            $table->string('gateway_ip', 255);
            $table->string('connection_type', 50);
            $table->string('ip_netmask', 255);
            $table->string('ip_gateway', 255);
            $table->string('rtu_server_ip', 50);
            $table->string('gateway_description', 255)->nullable();
            $table->integer('update_rtu');
            $table->integer('update_rtu_location');
            $table->integer('update_rtu_ssh');
            $table->integer('update_rtu_force_lp');
            $table->string('idf_number', 255)->nullable()->default('DEFAULT NULL');
            $table->string('switch_name', 255)->nullable()->default('DEFAULT NULL');
            $table->string('idf_port', 255)->nullable()->default('DEFAULT NULL');
            $table->string('created_at', 20)->nullable();
            $table->integer('created_by_user_idx');
            $table->string('updated_at', 20)->nullable();
            $table->integer('modified_by_user_idx')->nullable();
            $table->string('last_log_update', 20)->nullable()->default('0000-00-00 00:00:00');
            $table->string('soft_rev', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_rtu');
    }
};
