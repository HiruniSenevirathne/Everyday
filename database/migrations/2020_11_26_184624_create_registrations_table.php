<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
                $table-> id()->autoIncrement();
                $table-> String('Index_Number');
                $table-> integer('Fingerprint_Id');
                $table-> String('Name');
                $table-> String('Gender');
                $table-> String('Class_Name');
                $table-> String('Parent_Name');
                $table-> String('Telephone_No');
                $table-> mediumText('Image');
                $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
