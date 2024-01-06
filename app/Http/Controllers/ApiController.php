<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CustomHelper;
use Illuminate\Support\Facades\File;

class ApiController extends Controller
{
    public function showWelcome()
    {
        $greeting = CustomHelper::getGreeting('John');
        return view('welcome', ['greeting' => $greeting]);
    }
}
