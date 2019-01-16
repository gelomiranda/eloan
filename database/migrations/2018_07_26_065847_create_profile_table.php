<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); 
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile_no')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('job_title')->nullable();
            $table->string('current_employer')->nullable();
            $table->integer('no_of_years')->nullable();
            $table->string('office_address')->nullable();
            $table->string('office_contact_no')->nullable();
            $table->string('bank_account_no')->nullable();
            $table->string('bank_account_name')->nullable();
            $table->integer('monthly_gross_income')->nullable();

            $table->boolean('is_approved')->default(0);
            $table->string('approved_by')->nullable();
            $table->date('approved_at')->nullable();

            
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
        Schema::dropIfExists('profiles');
    }
}
