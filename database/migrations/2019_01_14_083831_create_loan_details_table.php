<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id')->unsigned(); 
            $table->index('loan_id')->nullable();
            $table->foreign('loan_id')->references('id')->on('loans');
            $table->string('status')->nullable();
            $table->string('remark')->nullable();
            $table->string('image')->nullable();
            $table->string('transact_through')->nullable();
            $table->date('transaction_date')->nullable();
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
        Schema::dropIfExists('loan_details');
    }
}
