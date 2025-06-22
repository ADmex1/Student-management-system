<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardLecturerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
      return inertia('Lecturer/Dashboard',[
            'page_settings'=>[
                'title' => 'Lecturer Dashboard',
                'subtitle'=> 'Showing the Statistics',
            ],
        ]);
    }
}
