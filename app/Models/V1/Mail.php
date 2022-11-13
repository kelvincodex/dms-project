<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mail extends Model
{
    use HasFactory;

    protected $table ="mails";
    protected $primaryKey ="mailId";

    protected $fillable = [
        "mailOwnerName",
        "mailTitle",
        "mailOfficeId",
        "mailDateOfEntry",
        "mailDateOfDispatch",
        "mailStatusOfDispatch",
        "mailStatus",
    ];

    public function digitize_docs(): HasOne
    {
        return $this->hasOne(DigitizeDoc::class,
            "digitizeDocMailId",
            "mailId"
        );
    }

    public function doc_infos(): HasMany
    {
        return $this->hasMany(DocInfo::class,
            "docInfoMailId",
            "mailId"
        );
    }

    public function doc_histories(): HasMany
    {
        return $this->hasMany(DocHistory::class,
            "docHistoryId",
            "mailId"
        );
    }

    public function offices(): BelongsTo
    {
        return $this->belongsTo(Office::class,
            "mailOfficeId",
            "officeId"
        );
    }
}
