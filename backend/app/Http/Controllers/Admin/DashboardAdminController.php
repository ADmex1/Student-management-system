<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function __invoke(Request $request){
        return inertia('Admin/Dashboard',[
            'page_settings'=>[
                'title' => 'Admin Dashboard',
                'subtitle'=> 'Showing the Statistics',
            ],
        ]);
    }
}
