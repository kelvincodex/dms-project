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
        Schema::create('digitize_docs', function (Blueprint $table) {
            $table->id("digitizeDocId");
            $table->foreignId("digitizeDocMailId")
                    ->constrained("mails", "mailId")
                    ->onDelete("cascade");
            $table->foreignId("digitizeDocInfoId")
                    ->constrained("doc_infos", "docInfoId")
                    ->onDelete("set null");
            $table->foreignId("digitizeDocDigitizeTypeId")
                    ->constrained("digitize_types", "digitizeTypeId")
                    ->onDelete("set null");
            $table->string("digitizeDocStatus")->default("Active");
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
        Schema::dropIfExists('digitize_docs');
    }
};
