<h2> Meeting Project</h2>
<p>Create a project to get suggestions for suitable meeting times.</p>

Framework: Laravel v9.19.0

<div>
<h4>Migrations</h3>
    
```
     Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->text('customer_id',255)->nullable();
            $table->timestamp('start_time');
            $table->integer('start_time_sec');
            $table->timestamp('end_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('end_time_sec');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
```
</div>

<div>
<h4>ImportController</h4>
<p>The following functions will be exploded and recorded data in database</p>

```
class ImportController extends Controller
{
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
```

<div>
<h4>SearchController</h4>
<p>Using the following function to fetch data(Meeting Times) from the database</p>

```
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
```
</div>


<h4>Routes</h4>
<p>Using the following route to store data to data base </p>
<p>Route::get('/import',[ImportController::class,'index']);</p>

<p>Useing the following route to fetch data from database</p>
<p>Route::get('/search',[SearchController::class,'index']);</p>
    
<h2> How to Run the Project</h2>    
   
<p>1- Using XAMPP or WAMP to run the project.</p>
<p>2- Use Postman to test api</p>
<p>3- Send your request by the following Json format.You can send different ID and a Date.</p>
    
![Screenshot 2022-08-01 114210](https://user-images.githubusercontent.com/74821847/182133996-fdfb12c0-8f72-4576-97da-a92acb52c429.jpg)

