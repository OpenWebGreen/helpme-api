<?php

namespace App\Http\Controllers;

use App\Desastre;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function getWarningArea($lat, $long)
    {
        $min_lat = $lat - 0.05;
        $max_lat = $lat + 0.05;
        $min_long = $long - 0.05;
        $max_long = $long + 0.05;

        $data = Desastre::where('latitude', '<=', $max_lat)
            ->where('latitude', '>=', $min_lat)
            ->where('longitude', '<=', $max_long)
            ->where('longitude', '>=', $min_long)
            ->get();
        return json_encode($data);
    }
}
