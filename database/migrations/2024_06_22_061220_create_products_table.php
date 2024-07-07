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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
            ->constrained('categories')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();

            $table->unsignedBigInteger('brand_id')
            ->nullable();

            $table->unsignedBigInteger('created_by')
            ->nullable();
            $table->unsignedBigInteger('updated_by')
            ->nullable();

            $table->string('title')->index();
            $table->string('slug')->unique()->index();
            $table->string('cover_image');
            $table->string('hover_image')->nullable();
            $table->string('video_url')->nullable();
            $table->mediumText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('specification')->nullable();
            $table->string('sku')->nullable()->index();
            $table->string('bar_code')->nullable()->index();
            $table->integer('price')->default(0)->index();
            $table->integer('discount')->nullable();
            $table->integer('visited')->default(0);
            $table->enum('status', ['active','inactive'])->default('active')->index();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
