<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocSource extends Model
{
    use HasFactory;

    protected $table="doc_sources";
    protected $primaryKey="docSourceId";

    protected $fillable=[
        "docSourceName",
        "docSourceStatus",
    ];

    public function doc_infos(): HasMany
    {
        return $this->hasMany(DocInfo::class,
            "docInfoDocSourceId",
            "sourceId"
        );
    }
}
