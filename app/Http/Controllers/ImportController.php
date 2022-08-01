<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ImportController extends Controller
{

    //The following functions will be exploded and recored the data in database
    public function index()
    {
        ini_set('max_execution_time', 3600);

        $root = storage_path('data\freebusy.txt');

        $handle = fopen($root, "r");

        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $meetArr = explode(";", $line);
                if (count($meetArr) == 4) {
                    $meet = new Meeting();
                    $meet->customer_id = $meetArr[0];
                    $meet->start_time = Carbon::parse($meetArr[1]);// 2012-11-21 8:00:22
                    $meet->start_time_sec = Carbon::parse($meetArr[1])->timestamp;//1434748472
                    $meet->end_time = Carbon::parse($meetArr[2]);
                    $meet->end_time_sec = Carbon::parse($meetArr[2])->timestamp;
                    if ($meet->save()) {
                        echo $meet->id.'<br/>';
                    }
                }
            }
            fclose($handle);
        }
    }
}
