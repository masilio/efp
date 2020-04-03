<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bidderfullname');
            $table->string('mobilenumber');
            $table->string('emailaddress');
            $table->string('biddercode');
            $table->mediumText('addresses');
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
        Schema::dropIfExists('auction_participants');
    }
}
