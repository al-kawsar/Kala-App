<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $title = 'Dashboard';
        $data = [
            'posts',
            'totalPosts',
            'totalPostComments'
        ];
        return view("dashboard.home", compact('title', 'data'));
    }
}
