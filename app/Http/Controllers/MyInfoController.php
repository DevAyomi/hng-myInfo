<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyInfoController extends Controller
{
    public function myInfo(){
        return response()->json([
            "slackUsername" => "Devayo",
            "backend" => true,
            "age" => 21,
            "bio" => "I am Gbolagade Winner by name, i love coding so much"
        ]);
    }
}
