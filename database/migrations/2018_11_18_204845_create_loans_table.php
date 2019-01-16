<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            //$table->foreign('users_id')->references('id')->on('users');
            $table->integer('user_id')->unsigned(); 
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->double('amount');
            $table->double('interest');
            $table->double('repayment')->nullable();
            $table->date('repayment_date')->nullable();
            $table->integer('term');
            $table->string('status');
            $table->string('remark');
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
        Schema::dropIfExists('loans');
        // $table->dropForeign('lists_user_id_foreign');
        // $table->dropIndex('lists_user_id_index');
        // $table->dropColumn('user_id');
    }
}
