<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\PlayerName;

class getDataController extends Controller
{
    //

    public function getData(Request $request)
    {
        $result = [];

        $querytext = $request->text.'%';
        $result = PlayerName::where('name' , 'like' , $querytext)->get();

        return $result;
    }
}
