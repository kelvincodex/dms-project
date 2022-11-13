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
        Schema::create('mails', function (Blueprint $table) {
            $table->id("mailId");
            $table->string("mailTitle")->nullable();
            $table->string("mailOwnerName")->nullable();
            $table->foreignId("mailOfficeId")
                    ->constrained("offices", "officeId")
                    ->onDelete("set null");
            $table->timestamp("mailDateOfEntry")->nullable();
            $table->timestamp("mailDateOfDispatch")->nullable();
            $table->string("mailStatusOfDispatch")->default("Pending");
            $table->string("mailStatus")->default("Active");
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
        Schema::dropIfExists('mails');
    }
};
