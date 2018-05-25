<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function showFaq()
    {

    }

    public function showDocs()
    {

    }

    public function maintenance()
    {
        if ( app()->isDownForMaintenance() ) {
            Artisan::call('up');
        } else {
            Artisan::call('down');
        }
    }
}
