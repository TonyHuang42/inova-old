<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // News Table
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            // Foreign keys for categories and devices
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('device_id')->nullable()->constrained('devices')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->string('images')->nullable();
            $table->string('videos')->nullable();
            $table->timestamp('published_at')->useCurrent();
            $table->boolean('is_visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
}
