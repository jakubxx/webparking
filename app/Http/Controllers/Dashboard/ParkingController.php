<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Parking;
use App\User;
use Illuminate\Http\Response;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Collection;

class ParkingController extends Controller
{

    public function deleteParking(request $request){
        $parking = Parking::find ($request->id)->delete();
        return response()->json();
    }

    public function getParkingsList(Parking $parking, Request $request) {

        $count_parkings = Parking::count();

        $parkings_list = Parking::select(
            'id',
            'start_hour',
            'start_img',
            'end_hour',
            'end_img',
            'registration'
        )->sortable()->paginate(10);

        return view('panel/parking')->with(['parkings_list' => $parkings_list, 'count_parkings' => $count_parkings]);
    }
}
