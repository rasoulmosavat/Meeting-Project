<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->text('customer_id',255)->nullable();
            $table->timestamp('start_time');
            $table->integer('start_time_sec');
            $table->timestamp('end_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('end_time_sec');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
