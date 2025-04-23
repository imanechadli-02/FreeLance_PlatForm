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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('profil_picture')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->text('company_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
            Schema::table('users', function (Blueprint $table) {
                if (Schema::hasColumn('users', 'phone')) {
                    $table->dropColumn('phone');
                }
                if (Schema::hasColumn('users', 'profil_picture')) {
                    $table->dropColumn('profil_picture');
                }
                if (Schema::hasColumn('users', 'company_name')) {
                    $table->dropColumn('company_name');
                }
                if (Schema::hasColumn('users', 'company_website')) {
                    $table->dropColumn('company_website');
                }
                if (Schema::hasColumn('users', 'company_description')) {
                    $table->dropColumn('company_description');
                }
            });
        }
        

    
};
