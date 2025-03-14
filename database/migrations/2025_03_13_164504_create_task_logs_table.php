<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('task_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained('tasks');
            $table->enum('status_from', ['belum selesai', 'selesai', 'ditunda']);
            $table->enum('status_to', ['belum selesai', 'selesai', 'ditunda']);
            $table->foreignId('changed_by')->constrained('users');
            $table->timestamp('changed_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_logs');
    }
};
