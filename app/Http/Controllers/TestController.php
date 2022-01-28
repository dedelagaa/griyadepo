<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $star = 3;
        for($y = $star; $y <= $star; $y++){
            for($x = 1; $x <= $y; $x++){
                echo "*";
            }
            echo "<br>";
        }
    }
}
