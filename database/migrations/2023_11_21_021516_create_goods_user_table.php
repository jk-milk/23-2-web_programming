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
        Schema::create('goods_user', function (Blueprint $table) {
            $table->id();
            // 주문자 아이디
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // 상품 아이디
            $table->foreignId('goods_id')->constrained()->onDelete('cascade');
            // 주문량
            $table->unsignedBigInteger('amount')->default(1);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods_user');
    }
};
