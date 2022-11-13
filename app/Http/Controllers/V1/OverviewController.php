<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Service\V1\OverviewService;

class OverviewController extends Controller
{
    public function __construct(protected OverviewService $overviewService){

    }
    public function overview_view(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return $this->overviewService->index();
    }
}
