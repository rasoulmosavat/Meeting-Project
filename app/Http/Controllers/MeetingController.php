<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\FreeTimeController;
use App\Http\Controllers\RecordDataController;


class MeetingController extends Controller
{
    // function getAll(){
	// 	$root= storage_path('data\freebusy.txt');
	// 	$content = File::get($root);
	// 	$explodeContents = explode(';',$content);
		
	// 	return response()->json(['result'=>$explodeContents], status:200);
	// }
	
	
	// function meetingtime(Request $request){		
	// 	$this->validate($request,[
	// 			'id'=>'required|max:1000|min:3',
	// 			'date'=> 'required|max:256'
	// 	]);
		
	// 	$date = $request->input(key:'date');
	// 	$idContent=explode(",",$request->input(key:'id'));
		
	// 	//Reading data from the file freebusy.txt
	// 	$root= storage_path('data\freebusy.txt');
	// 	$content = File::get($root);
	// 	$explodeContents = explode(';',$content);
		
	// 	$FreeTimeController = new FreeTimeController();

	// 	// The following function, Make an array of employee's data, includes id,first time and the second time. 
	// 	$employees = $FreeTimeController->employeedata($explodeContents);


	// // The following function shows the employees free time, the following array($DataTime) is created. 
	// // Working time is from 8:00 AM till 5:00 PM, So the working time is divided to 18(every 30 minutes).
	// // Then an array ($DataTime )is created to show when each employee is free for meeting. 
	// // $DataTime includes employee id, first time, and also other values that shows when the employee is free. for example if...
	// // The value 0 can show that the employ is busy from 8:00 AM to 8:00 AM. 	
	// 	$dateTimeArray = $FreeTimeController->dateTimeArray($employees,$date,$idContent);

	// 	// The following loop shows when employee or employees are free for meeting	
	// 	$freeTimesArray = $FreeTimeController->freeTimesArray($dateTimeArray);

	

	// 	$freeMeetingTime="";

		
	// 	if($freeTimesArray[0][0]==1)						
	// 					$freeMeetingTime.="8:00 - 8:30 & ";
	// 	if($freeTimesArray[0][1]==1)
	// 					$freeMeetingTime.="8:30 - 9:00 & ";
	// 	if($freeTimesArray[0][2]==1)
	// 					$freeMeetingTime.="9:00 - 9:30 & ";
	// 	if($freeTimesArray[0][3]==1)	
	// 					$freeMeetingTime.="9:30 - 10:00 & ";
	// 	if($freeTimesArray[0][4]==1)
	// 					$freeMeetingTime.="10:00 - 10:30 & ";
	// 	if($freeTimesArray[0][5]==1)
	// 					$freeMeetingTime.="10:30 - 11:00 & ";
	// 	if($freeTimesArray[0][6]==1)
	// 					$freeMeetingTime.="11:00 - 11:30 & ";
	// 	if($freeTimesArray[0][7]==1)
	// 					$freeMeetingTime.="11:30 - 12:00 & ";
	// 	if($freeTimesArray[0][8]==1)
	// 					$freeMeetingTime.="12:00 - 12:30 & ";
	// 	if($freeTimesArray[0][9]==1)
	// 					$freeMeetingTime.="12:30 - 13:00 & ";
	// 	if($freeTimesArray[0][10]==1)
	// 					$freeMeetingTime.="13:00 - 13:30 & ";
	// 	if($freeTimesArray[0][11]==1)
	// 					$freeMeetingTime.="13:30 - 14:00 & ";
	// 	if($freeTimesArray[0][12]==1)
	// 					$freeMeetingTime.="14:00 - 14:30 & ";
	// 	if($freeTimesArray[0][13]==1)
	// 					$freeMeetingTime.="14:30 - 15:00 & ";
	// 	if($freeTimesArray[0][14]==1)
	// 					$freeMeetingTime.="15:00 - 15:30 & ";
	// 	if($freeTimesArray[0][15]==1)
	// 					$freeMeetingTime.="15:30 - 16:00 & ";
	// 	if($freeTimesArray[0][16]==1)
	// 					$freeMeetingTime.="16:00 - 16:30 & ";
	// 	if($freeTimesArray[0][17]==1)
	// 					$freeMeetingTime.="16:30 - 17:00 & ";
				
			
	// 	// the following fucntion is Recorded data in database
	// 	$RecordDataController = new RecordDataController();
	// 	$RecordDataController->add($idContent,$freeMeetingTime,$date,);

	// 	if($freeMeetingTime!="")
	// 		return response()->json(['Free Time for Meeting'=>$freeMeetingTime], status:200);
	// 	else
	// 		return response()->json(['result'=>"there is no free time in the mentioned time"], status:200);
		
	// }
}
