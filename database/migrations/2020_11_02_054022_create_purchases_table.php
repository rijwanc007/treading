<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_status')->nullable();
            $table->string('warehouse')->nullable();
            $table->bigInteger('purchase_account')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('date')->nullable();
            $table->longText('p_code')->nullable();
            $table->longText('p_name')->nullable();
            $table->longText('p_price')->nullable();
            $table->longText('p_quantity')->nullable();
            $table->bigInteger('ban')->nullable();
            $table->bigInteger('packing')->nullable();
            $table->bigInteger('belt')->nullable();
            $table->bigInteger('labour')->nullable();
            $table->bigInteger('transport')->nullable();
            $table->bigInteger('amount')->nullable();
            $table->bigInteger('commission')->nullable();
            $table->bigInteger('after_commission_amount')->nullable();
            $table->bigInteger('due')->nullable();
            $table->bigInteger('total_amount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
