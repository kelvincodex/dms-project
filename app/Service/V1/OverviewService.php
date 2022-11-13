<?php

namespace App\Service\V1;

class OverviewService
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('v1.dashboard.overview.index-overview');
    }
}
