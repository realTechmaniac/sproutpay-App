<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('company_name');
            $table->string('country_of_registration');
            $table->integer('registration_number')->unique();
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
        Schema::dropIfExists('company_details');
    }
}
