<?php

namespace App\Http\Controllers\Admin;

use App\Models\MaintenanceEvent;
use App\Models\Point;

class HomeController
{
    public function index()
    {

        $pois = Point::with(['sensors','poiMaintenanceEvents'])->get();
        $mEvents = MaintenanceEvent::noPoi()->get();

        return view('home',compact('pois','mEvents'));
    }
}
