<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocFile extends Model
{
    use HasFactory;

    protected $table ="doc_files";
    protected $primaryKey ="docFileId";

    protected $fillable =[
        "docFileName",
        "docFilePath",
        "docFileDigitizeId",
        "docFileStatus",
    ];

    public function digitizes(){
        return $this->belongsTo(DigitizeDoc::class,
            "docFileDigitizeDocId",
            "digitizeId"
        );
    }
}
