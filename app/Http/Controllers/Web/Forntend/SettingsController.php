<?php

namespace App\Http\Controllers\Web\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function system()
    {
        return view('backend.admin.layouts.cms.systemsettings');
    }

    public function mailsettings()
    {
        return view('backend.admin.layouts.cms.mailsettings');
    }


    public function socialmedias()
    {
        return view('backend.admin.layouts.cms.socialmedia');
    }
}

