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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->integer('age');
            $table->string('phone');
            $table->string('social_id')->nullable();
            $table->string('email');
            $table->foreignId('course_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('hear_about');
            $table->string('specify_heard_about')->nullable();
            $table->text('question');
            $table->boolean('check_read_status')->default(false);
            $table->enum('status', ['0', '1', 'open', 'read'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
