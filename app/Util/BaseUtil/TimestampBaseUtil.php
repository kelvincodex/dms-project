<?php

namespace App\Util\BaseUtil;

use Carbon\Carbon;

trait TimestampBaseUtil
{
    public function addTimestamp($min="", $hr="", $sec=""): \Illuminate\Support\Carbon|string
    {
        $now =  Carbon::now();
        if ($min !==""){
            return $now->addMinute($min)->toDateTimeString();
        }elseif ($hr !==""){
            return $now->addHour($hr)->toDateTimeString();
        }elseif ($sec !==""){
            return $now->addSecond($sec)->toDateTimeString();
        }else{
            return $now;
        }

    }

    public function dataTime(): float|int|string
    {
        return Carbon::now()->toDateTimeString();
    }
}
