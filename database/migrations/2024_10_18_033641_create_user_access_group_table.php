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
        Schema::create('user_access_group', function (Blueprint $table) {
            $table->integer('user_access_id')->primary()->autoIncrement();
            $table->text('user_idx')->comment('USER_ID from SAP');
            $table->text('user_name')->nullable()->default('DEFAULT NULL')->comment('USER_NAME');
            $table->date('user_expiration')->nullable()->default('DEFAULT NULL')->comment('USER_ID_VALID_TO');
            $table->integer('site_idx');
            $table->dateTime('created_at')->nullable()->default('DEFAULT NULL');
            $table->integer('created_by_user_idx')->nullable()->default('DEFAULT NULL');
            $table->dateTime('updated_at')->nullable()->default('DEFAULT NULL');
            $table->integer('updated_by_user_idx')->nullable()->default('DEFAULT NULL');
            $table->text('access_list_src')->nullable()->default('DEFAULT NULL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_access_group');
    }
};
