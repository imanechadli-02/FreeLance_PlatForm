<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('messages', function (Blueprint $table) {
            if (!Schema::hasColumn('messages', 'sender_id')) {
                $table->foreignId('sender_id')->constrained('users')->onDelete('cascade');
            }
            if (!Schema::hasColumn('messages', 'receiver_id')) {
                $table->foreignId('receiver_id')->constrained('users')->onDelete('cascade');
            }
            if (!Schema::hasColumn('messages', 'message')) {
                $table->text('message');
            }
            if (!Schema::hasColumn('messages', 'is_read')) {
                $table->boolean('is_read')->default(false);
            }
        });
    }

    public function down()
    {
        // We don't want to drop these columns in the down migration
        // as they are essential for the messages table
    }
}; 