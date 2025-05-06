<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        if (!Schema::hasTable('order_items')) { // ✅ Check if table already exists
            Schema::create('order_items', function (Blueprint $table) {
                $table->id();
                $table->foreignId('order_id')->constrained()->onDelete('cascade');
                $table->foreignId('product_id')->nullable()->constrained()->onDelete('set null');

                $table->string('product_name');
                $table->decimal('price', 10, 2);
                $table->integer('quantity');
                $table->timestamps();
            });
        }
    }

    public function down() {
        Schema::dropIfExists('order_items');
    }
};
