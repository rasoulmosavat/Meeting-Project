
# meeting-project

# routes\web.php


<div>
<p>migrations</p>
```
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
```
</div>

<div>
<h4>ImportController</h4>
<p>The fillowing functions will be eploded and saved the data in database</p>

```
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
```


<div>
<h4>SearchController</h4>
<p>Using the fillowing function to fetch data(Meeting Times) from the database</p>

```
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
```
</div>


<h4>Routes</h4>
<p>Using the following route to store data to data base </p>
<p>Route::get('/import',[ImportController::class,'index']);</p>

<p>Useing the following route to fetch data from database</p>
<p>Route::get('/search',[SearchController::class,'index']);</p>


<img src="{{asset('/storage/images/postman.jpg')}}">

                  
                         