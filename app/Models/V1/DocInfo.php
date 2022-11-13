<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DocInfo extends Model
{
    use HasFactory;

    protected $table ="doc_infos";
    protected $primaryKey ="docInfoId";

    protected $fillable =[
        "docInfoOfficeId",
        "docInfoMailId",
        "docInfoDocSourceId",
        "docInfoReceiverId",
        "docInfoHandlerId",
        "docInfoPriority",
        "docInfoDocClassificationId",
        "docInfoDateOfArrival",
        "docInfoStatus",
        "docInfoTimeOfArrival",
    ];


    public function digitize_docs(): HasOne
    {
        return $this->hasOne(DigitizeDoc::class,
            "digitizeDocInfoId",
            "docInfoId"
        );
    }

    public function offices(): BelongsTo
    {
        return $this->belongsTo(Office::class,
            "docInfoOfficeId",
            "officeId"
        );
    }

    public function mails(): BelongsTo
    {
        return $this->belongsTo(Office::class,
            "docInfoMailId",
            "mailId"
        );
    }

    public function doc_sources(): BelongsTo
    {
        return $this->belongsTo(DocSource::class,
            "docInfoDocSourceId",
            "sourceId"
        );
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,
            "docInfoUserId",
            "userId"
        );
    }

    public function doc_classification(): BelongsTo
    {
        return $this->belongsTo(DocClassification::class,
            "docInfoDocClassificationId",
            "classificationId"
        );
    }
}
