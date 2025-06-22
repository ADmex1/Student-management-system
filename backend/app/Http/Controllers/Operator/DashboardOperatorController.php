<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardOperatorController extends Controller
{
    /**
     * Handle the incoming request.
     */
        public function __invoke(Request $request){
        return inertia('Operator/Dashboard',[
            'page_settings'=>[
                'title' => 'Operator Dashboard',
                'subtitle'=> 'Showing the Statistics',
            ],
        ]);
    }
}
