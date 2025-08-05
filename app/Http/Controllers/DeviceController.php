<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Number;
use Illuminate\Support\Collection;
// use Illuminate\Support\Facades\DB;
use App\Models\Device;

class DeviceController extends Controller
{
    public function index(Request $request) : view
    {
        // dd($request->all());
        
        $query = Device::join('specifications', 'devices.ref_id', '=', 'specifications.spec_id')
        ->select('devices.*', 'specifications.storage');
        
        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }
        if ($request->filled('price')) {
            $price = explode('-', $request->price);
            $query->whereBetween('price', [(int) $price[0],(int) $price[1]]);
        }
        if ($request->filled('condition')) {
            $query->where('condition', $request->condition);
        }
        
        $devices = $query->paginate(6);
             
        $deviceDrop = Device::select('brand')->distinct()->get();
        return view('DevicePage', compact('devices', 'deviceDrop'));
    }
}
