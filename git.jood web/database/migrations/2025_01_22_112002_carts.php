<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('carts', function (Blueprint $table) {
        $table->id(); // Cart_ID - Primary Key
        $table->unsignedBigInteger('user_id'); // Foreign Key to Users
        // $table->unsignedBigInteger('product_id'); // Foreign Key to Products
        $table->decimal('product_price', 10, 2); // Price of the product at the time of adding to cart
        $table->integer('quantity'); // Quantity of the product
        $table->decimal('total_price', 10, 2); // Total price (Quantity * Product Price)
        $table->timestamps();

        // Foreign Keys
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
