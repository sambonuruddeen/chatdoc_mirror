<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profile', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->text('biography');
            $table->string('specialization');
            $table->string('license_type');
            $table->string('license_number');
            $table->string('languages');
            $table->float('rate');
            $table->string('twitter')->nullable();;
            $table->string('facebook')->nullable();;
            $table->string('linkedin')->nullable();;
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
        Schema::dropIfExists('doctor_profile');
    }
}
