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
        if (!Schema::hasColumn('users', 'phone')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('phone', 20)->nullable();
            });
        }
        
        if (!Schema::hasColumn('users', 'company_name')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('company_name', 255)->nullable();
            });
        }
        
        if (!Schema::hasColumn('users', 'company_website')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('company_website', 255)->nullable();
            });
        }
        
        if (!Schema::hasColumn('users', 'company_description')) {
            Schema::table('users', function (Blueprint $table) {
                $table->text('company_description')->nullable();
            });
        }
        
        if (!Schema::hasColumn('users', 'profil_picture')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('profil_picture', 255)->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('company_name');
            $table->dropColumn('company_website');
            $table->dropColumn('company_description');
            $table->dropColumn('profil_picture');
        });
    }
};
