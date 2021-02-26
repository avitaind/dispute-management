<?php

namespace App\Http\Controllers;
use App\Models\Company;
use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $companies = Company::all();
        $types = Type::all();
        return view('home', compact('companies', 'types'));
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
