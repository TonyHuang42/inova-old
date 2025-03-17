<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->enum('category', ['academic', 'community', 'general'])->default('general');
            $table->boolean('is_published')->default(true);
            $table->timestamp('created_at')->nullable()->change();
            $table->timestamp('updated_at')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn(['category', 'is_published']);
        });
    }
};
