<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telp_no');
            $table->string('email');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kodepos');
            $table->string('jenis_kurir')->default('j&t');
            $table->decimal('grand_total', 13, 2);
            $table->integer('status');
            $table->text('products');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
