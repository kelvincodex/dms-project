<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DocClassification extends Model
{
    use HasFactory;
    protected $table="doc_classifications";
    protected $primaryKey="docClassificationId";

    protected $fillable=[
        "docClassificationName",
        "docClassificationStatus",
    ];

    public function doc_infos(): HasMany
    {
        return $this->hasMany(DocInfo::class,
            "docInfoDocClassificationId",
            "classificationId"
        );
    }
}
