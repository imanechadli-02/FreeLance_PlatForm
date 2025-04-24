<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserRoleEnumInUsersTable extends Migration
{
    public function up()
    {
        // You must have doctrine/dbal installed to modify column types
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['client', 'developer', 'admin'])->default('client')->change();
            $table->enum('requested_role', ['client', 'developer', 'admin'])->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['freelancer', 'admin', 'client'])->default('client')->change();
            $table->enum('requested_role', ['freelancer', 'admin', 'client'])->nullable()->change();
        });
    }
}
