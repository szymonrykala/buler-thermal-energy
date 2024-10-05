<?php

namespace App\Http\Controllers;

use App\Models\HeatpumpProduct;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;


final class MainController extends Controller
{

    public function home(): View
    {
        return view("home");
    }

    public function heatpumps(): View
    {
        return view("heatpumps.main", [
            "products" => HeatpumpProduct::fromFile("data/air-heatpumps.json")
        ]);
    }

    public function airHeatpumps(): View
    {
        return view("heatpumps.air", [
            "products" => HeatpumpProduct::fromFile("data/air-heatpumps.json")
        ]);
    }

    public function glycolHeatpumps(): View
    {
        return view("heatpumps.glycol", [
            "products" => HeatpumpProduct::fromFile("data/glycol-heatpumps.json")
        ]);
    }

    public function directEvaporationHeatpumps(): View
    {
        return view("heatpumps.direct-evaporation", [
            "products" => HeatpumpProduct::fromFile("data/direct-evaporation-heatpumps.json")
        ]);
    }

    public function waterHeatpumps(): View
    {
        return view("heatpumps.water");
    }

    public function batteries(): View
    {
        return view("batteries");
    }

    public function inProgress(): View
    {
        return view("in-progress");
    }
}
