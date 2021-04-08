<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheckingAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checking_accounts', function(Blueprint $table){
            $table->id();
            $table->string('account_name')->nullable(false)->default(null);
            $table->integer('agency')->nullable(false)->default(null);
            $table->integer('account_number')->nullable(false)->default(null);
            $table->float('balance', 8, 2)->nullable(false)->default(null);
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
        Schema::drop('checking_accounts');
    }
}
