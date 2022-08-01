<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Meeting;

class RecordDataController extends Controller
{
    // function getdata(){
		
	// 	$Meeting = Meeting::all();
	// 	return response()->json(['data'=>$Meeting],status:200);
	// }
	
	// function add($idContent,$freeMeetingTime,$date){		
	// 	Meeting::create([
	// 		'userId'=>json_encode($idContent),
	// 		'date'=>$date,
    //         'freeTime'=>$freeMeetingTime,
	// 	]);
    //     echo json_encode($idContent);
		
	// // return response()->json(['result'=>'item Created Successfully'],status:200);
		
	// }
	
	// function delete($id){
	// 	$note=Meeting::find($id);
	// 	if(!$note){
	// 				response()->json(['error'=>'item not found'], status:404);
	// 	}
	// 	$note->delete();
	// 	return response()->json(['result'=>'item deleted successfully'], status:204);
	// }
	
}
