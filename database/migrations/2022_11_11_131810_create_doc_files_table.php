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
        Schema::create('doc_files', function (Blueprint $table) {
            $table->id("docFileId");
            $table->string("docFileName")->nullable();
            $table->string("docFilePath")->nullable();
            $table->foreignId("docFileDigitizeDocId")
                    ->constrained("digitize_docs", "digitizeId")
                    ->onDelete("cascade");
            $table->string("docFileStatus")->default("Active");
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
        Schema::dropIfExists('doc_files');
    }
};
