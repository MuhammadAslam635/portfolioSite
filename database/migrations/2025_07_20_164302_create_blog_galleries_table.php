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
        Schema::create('blog_galleries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->string('image')->default('default.jpg');
            $table->string('caption')->nullable();
            $table->text('content')->nullable();
            $table->enum('is_active', [0, 1])->default(1);
            $table->enum('is_featured', [0, 1])->default(0);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_galleries');
    }
};
