<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // call general view
    public function index()
    {
        return view('admin.Setting.general-setting');
    }

    // call seo view
    public function seo()
    {
        return view('admin.Setting.seo');
    }
    // call ads view
    public function ads()
    {
        return view('admin.Setting.ads');
    }

    // call ads view
    public function socialLogin()
    {
        return view('admin.Setting.social-login');
    }

    // call payment view
    public function payment()
    {
        return view('admin.Setting.payment');
    }
    // call recapture view
    public function googleRecapture()
    {
        return view('admin.Setting.google-recapture');
    }

    // call email view
    public function sendMail()
    {
        return view('admin.Setting.email');
    }

    // call email template view
    public function emailTemplate()
    {
        return view('admin.Setting.email-template');
    }
}
