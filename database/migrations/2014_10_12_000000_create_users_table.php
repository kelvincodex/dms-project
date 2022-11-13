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
        Schema::create('users', function (Blueprint $table) {
            $table->id("userId");
            $table->string('userFirstName')->nullable();
            $table->string('userLastName')->nullable();
            $table->foreignId('userRoleId')
                    ->constrained("user_roles", "userRoleId")
                    ->onDelete("set null");
            $table->foreignId('userOfficeId')
                    ->constrained("offices", "officeId")
                    ->onDelete("set null");
            $table->string('userEmail')->unique()->nullable();
            $table->string('userPassword')->nullable();
            $table->string('userOtp')->nullable();
            $table->timestamp('userOtpExpireAt')->nullable();
            $table->integer('userIsAdmin')->default(0);
            $table->integer('userIsSuperAdmin')->default(0);
            $table->string('userStatus')->default("Pending");
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
        Schema::dropIfExists('users');
    }
};
