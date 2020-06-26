<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ActivateController extends Controller
{
    //

    public function index()
    {
        $api_token = Cookie::get('api_token');
        $phone_number = Cookie::get('phone_number');
        return view("backend.activate.activate")->withApiToken($api_token)->withPhoneNumber($phone_number);
    }
}
