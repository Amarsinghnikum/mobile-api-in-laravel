<?php

namespace App\Helpers;
use App\Models\User;
use File;
use DB;

class TestHelper
{
    public static function UsersData() 
    { 
        $data['audit_log'] = DB::table('audit_log')->select('title')->get();
        $data['users_data'] = User::select('id','name','email')->get();
        
        $jsonData = json_encode($data, JSON_PRETTY_PRINT);

        File::put(public_path('assets/data.json'), $jsonData);
    }
}