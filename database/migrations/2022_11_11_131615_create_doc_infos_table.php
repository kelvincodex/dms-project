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
        Schema::create('doc_infos', function (Blueprint $table) {
            $table->id("docInfoId");
            $table->foreignId("docInfoOfficeId")
                    ->constrained("offices", "officeId");
            $table->foreignId("docInfoMailId")
                    ->constrained("mails", "mailId")
                    ->onDelete("set null");
            $table->foreignId("docInfoDocSourceId")
                    ->constrained("doc_sources", "docSourceId")
                    ->onDelete("set null");
            $table->foreignId("docInfoUserId")
                    ->constrained("users", "userId");
            $table->integer("docInfoPriority")->nullable();
            $table->foreignId("docInfoDocClassificationId")
                    ->constrained("doc_classifications", "docClassificationId")
                    ->onDelete("set null");
            $table->timestamp("docInfoDateOfArrival")->nullable();
            $table->timestamp("docInfoTimeOfArrival")->nullable();
            $table->string("docInfoStatus")->default("Active");
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
        Schema::dropIfExists('doc_infos');
    }
};
