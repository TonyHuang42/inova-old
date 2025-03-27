<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyCategoryColumnInNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            // Drop the old category column
            $table->dropColumn('category');

            // Add a category_id foreign key column
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->string('category'); // Reverting back to string if necessary
        });
    }
}
