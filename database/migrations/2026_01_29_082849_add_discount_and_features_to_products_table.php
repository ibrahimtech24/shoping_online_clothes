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
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('discount_percentage', 5, 2)->nullable()->after('price'); // Discount percentage (0-100)
            $table->boolean('is_featured')->default(false)->after('discount_percentage'); // Featured product
            $table->boolean('is_new')->default(false)->after('is_featured'); // New arrival
            $table->boolean('is_trending')->default(false)->after('is_new'); // Trending product
            $table->integer('stock_alert')->default(5)->after('is_trending'); // Low stock alert threshold
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['discount_percentage', 'is_featured', 'is_new', 'is_trending', 'stock_alert']);
        });
    }
};
