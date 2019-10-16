<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public static function getReturnGetResponse($ok, $items){
        return json_encode([
            'ok' => $ok,
            'results' => $items
        ]);
    }

}
