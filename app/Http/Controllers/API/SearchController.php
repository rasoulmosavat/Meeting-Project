<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;

//Using the following function to fetch data(Meeting Times) from the database
class SearchController extends Controller
{
    public function index()
    {
        $customer_id=request('customer_id');
        $date=Carbon::parse(request('date'));
        $date_timestamp=Carbon::parse(request('date'))->timestamp;//145435435345
        // dd($date);
        $meetings=Meeting::where('customer_id',$customer_id)
        ->where('start_time_sec','<=',$date_timestamp)
        ->where('end_time_sec','>=',$date_timestamp)
        ->get();
        return $meetings;
    }
}
