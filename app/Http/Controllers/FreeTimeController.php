<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FreeTimeController extends Controller
{
//     function employeedata($explodeContents){
//         $Employees =[];
// 		$counter=0;
		
// 		// Make an array of employee's data, includes id,first time and the second time.  
// 		for ($i = 0; $i < count($explodeContents); $i++) {		
				
// 				if (strtotime($explodeContents[$i])) {	
// 				$idchecker=[];
// 						$idchecker=explode("\n",$explodeContents[$i-1]);
// 						if(isset($idchecker[1]))
// 								$Employees[$counter][0]=$idchecker[1];
// 						else
// 								$Employees[$counter][0]=$idchecker[0];							
					
// 						$Employees[$counter][1]=$explodeContents[$i];
// 						$Employees[$counter][2]=$explodeContents[$i+1];
							
// 						$counter++;
// 						$i++;
// 				}
               	
				
		
// 		}
//         return $Employees;	
// 	}



// function dateTimeArray($Employees,$date,$idContent){

// 	$DataTime =array(
// 		array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)	
// 	);	
// 	$countDate=0;
// 	$startTime="1/01/2015 8:00:00 AM";
// 	$endTime="1/01/2015 5:00:00 PM";
	
// 	for ($j = 0; $j < count($Employees); $j++) {	
	
// 	//This part lets to take just data with the date passed through the post request.
// 	 if (date('m-d-Y', strtotime($date))==date('m-d-Y', strtotime($Employees[$j][1]))){	
// 	//idContent Loop
// 	 for($z=0; $z<count($idContent); $z++){		
// 			//Check data with the employees Id sent throug the Post request
// 			if($Employees[$j][0]==$idContent[$z]){
// 					for($f=0; $f<18; $f++){
// 						$DataTime[$countDate][$f]=0;	
// 					}
					
					
// 					$TimeCount2=19;
// 					$DataTime[$countDate][0]=$Employees[$j][0];
// 					$DataTime[$countDate][1]=$Employees[$j][1];
// 					$TimeCount=2;
// 					$modCounter =intdiv((strtotime(date('H:i', strtotime($Employees[$j][1])))-strtotime(date('H:i', strtotime($startTime)))),1800);
// 					$modCounter2 =intdiv((strtotime(date('H:i', strtotime($endTime)))-strtotime(date('H:i', strtotime($Employees[$j][2])))),1800);
					
					
// 					for($i=0; $i<$modCounter; $i++){				
// 						$DataTime[$countDate][$TimeCount]=1;
// 						$TimeCount++;			
// 					}	
					
// 					for($k=0; $k<$modCounter2; $k++){				
// 						$DataTime[$countDate][$TimeCount2]=1;
// 						$TimeCount2--;					
// 					}				
					
// 					$countDate++;	

		
// 			}
			
// 		}	
// 		//end of idContent Loop
// 	  }
		
        
//     }

//     return $DataTime;	
	
	
// }

// function freeTimesArray($DataTime){

// // // The following loop shows when employee or employees are free for meeting	
// 	$freeTime =array(
// 		array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1)	
// 	);	

// 	for($i=0; $i<count($DataTime); $i++){
// 		for($j=2; $j<20;$j++){		
// 				if($DataTime[$i][$j]==0){
// 					$freeTime[0][$j-2]=0;
					
					
// 				}
// 		}	
// 	}
	
// 	return $freeTime;


// }

}
