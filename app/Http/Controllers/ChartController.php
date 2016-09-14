<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use App\User;
use App\Rides;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Carbon\Carbon;
use Khill\Lavacharts\Lavacharts;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function chart() {	
			//flash('Charts Go Here');
			$site_title = "Chart Page";
            
            /* Search database for records and order by date */
            $pastRides = Rides::where('user_id', Auth::user()->id)->orderBy('ride_date')->get();
            
            /* Create a DataTable for Lavacharts to Chart */
            $allTable = Lava::DataTable();
            $allTable->addDateColumn('Date')
            ->addNumberColumn('Time')
            ->addNumberColumn('Distance')
            ->addNumberColumn('Avg. Speed');
           
            foreach ($pastRides as $pRides) {
                
                $speed = (floatval($pRides['ride_distance']))/(intval($pRides['ride_time'])/60);
                
                
                $allTable->addRow([$pRides['ride_date'], intval($pRides['ride_time']), floatval($pRides['ride_distance']), $speed]);
            }

            /* Chart Code here */

            Lava::LineChart('chart_All', $allTable, [
                'title' => 'Ride Time and Distance by Date',
                'titleTextStyle' => [
                    'fontName' => 'Arial',
                    'fontColor' => 'blue'
                ],
                'lineWidth' => 5,
                'legend' => [
                    'position' => 'top'
                ]
            ]);


            /* Chart 2 */
            $timeTable = Lava::DataTable();
            $timeTable->addDateColumn('Date')
            ->addNumberColumn('Time(in min.)');
            
            foreach ($pastRides as $pRides) {
                
                
                $timeTable->addRow([$pRides['ride_date'], $pRides['ride_time']]);
            }


            $areaChart = Lava::AreaChart('chart_Time', $timeTable, [
                
                'title' => 'Time per Ride',
                'titleTextStyle' => [
                    'fontName' => 'Arial',
                    'fontColor' => 'blue'
                ],
                'lineWidth' => 5,
                'legend' => [
                    'position' => 'top'
                ]
            ]);

///////////////////////////////////////////////////////////////////////////////////
            // Test Controls

            $filter  = Lava::DateRangeFilter(1, [
                'ui' => [
                    'filterColumnIndex' => 1,
                    'showRangeValues' => true,
                    'labelStacking' => 'vertical'
                ]
            ]);
            $control = Lava::ControlWrapper($filter, 'control2');
            $chart   = Lava::ChartWrapper($areaChart, 'chart2');
            Lava::Dashboard('chart_Time')->bind($control, $chart);



///////////////////////////////////////////////////////////////////////////////////


            /* Chart 3 */
            $distanceTable = Lava::DataTable();
            $distanceTable->addDateColumn('Date')
            ->addNumberColumn('Distance');
            
            foreach ($pastRides as $pRides) {
                
                
                $distanceTable->addRow([$pRides['ride_date'],  floatval($pRides['ride_distance'])]);
            }

            Lava::AreaChart('chart_Distance', $distanceTable, [
                'title' => 'Distance per Ride',
                'titleTextStyle' => [
                    'fontColor' => 'blue',
                    'fontSize' => 14
                ],
                'lineWidth' => 5
                
            ]);

            /* Chart 4 */
            $speedTable = Lava::DataTable();
            $speedTable->addDateColumn('Date')
            ->addNumberColumn('Avg. Speed');
            
            foreach ($pastRides as $pRides) {
                $speed = floatval($pRides['ride_distance'])/(intval($pRides['ride_time'])/60);
                
                $speedTable->addRow([$pRides['ride_date'], $speed]);
            }

            Lava::AreaChart('chart_Speed', $speedTable, [
                'title' => 'Average Speed per Ride',
                'titleTextStyle' => [
                    'fontColor' => 'blue',
                    'fontSize' => 14
                ],
                'lineWidth' => 5
                
            ]);


            /* Send to chart.blade.php */
		    return view('chart', compact('site_title', 'pastRides'));
    }
}

