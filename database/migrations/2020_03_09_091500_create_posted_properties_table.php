<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostedPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posted_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('advertisertype');
            $table->string('pubfullname');
            $table->string('pubemail');
            $table->string('pubtelephone');
            $table->string('pname');
            $table->mediumText('pfeatures');
            $table->string('pcategory');
            $table->string('pprice');
            $table->string('postpayable');
            $table->string('carrency');
            $table->string('postplan');
            $table->string('powner');
            $table->string('ownertelno');
            $table->string('p_image');
            $table->string('expiryat');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village');
            $table->String('status');
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
        Schema::dropIfExists('posted_properties');
    }
}
