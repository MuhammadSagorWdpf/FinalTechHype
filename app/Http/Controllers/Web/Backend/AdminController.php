<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('backend.admin.layouts.adminDashboard');
    }
}
