<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocHistory extends Model
{
    use HasFactory;

    protected $table = "doc_histories";
    protected $primaryKey = "docHistoryId";

    protected $fillable =[
        "docHistoryMailId",
        "docHistoryStatus"
    ];

    public function doc_histories(): BelongsTo
    {
        return $this->belongsTo(Mail::class,
            "docHistoryMailId",
            "mailId"
        );
    }
}
