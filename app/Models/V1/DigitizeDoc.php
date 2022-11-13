<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DigitizeDoc extends Model
{
    use HasFactory;

    protected $table = "digitize_docs";
    protected $primaryKey = "digitizeDocId";

    protected $fillable =[
        "digitizeDocMailId",
        "digitizeDocInfoId",
        "digitizeDocDigitizeTypeId",
        "digitizeDocStatus",
    ];

    function mails(): BelongsTo
    {
        return $this->belongsTo(Mail::class,
                "digitizeDocMailId",
                 "mailId"
        );
    }

    function digitize_types(): BelongsTo
    {
        return $this->belongsTo(DigitizeType::class,
            "digitizeTypeId",
            "digitizeDocId"
        );
    }

    function doc_infos(): BelongsTo
    {
        return $this->belongsTo(DocInfo::class,
            "digitizeDocInfoId",
            "docInfoId"
        );
    }

    function doc_files(): HasMany
    {
        return $this->hasMany(DocFile::class,
            "docFileDigitizeDocId",
            "digitizeId"
        );
    }
}
