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
            $rideTable = Lava::DataTable();
            $rideTable->addDateColumn('Date')
            ->addNumberColumn('Time')
            ->addNumberColumn('Distance');

            foreach ($pastRides as $pRides) {
                $rideTable->addRow([$pRides['ride_date'], intval($pRides['ride_time']), floatval($pRides['ride_distance'])]);
            }

            /* Chart Code here */

            Lava::LineChart('chart_Line', $rideTable, [
                'titleTextStyle' => [
                    'fontName' => 'Arial',
                    'fontColor' => 'blue'
                ],
                'legend' => [
                    'position' => 'top'
                ]
            ]);

            Lava::AreaChart('chart_Area', $rideTable, [
                'titleTextStyle' => [
                    'fontName' => 'Arial',
                    'fontColor' => 'blue'
                ],
                'legend' => [
                    'position' => 'top'
                ]
            ]);





            /* Send to chart.blade.php */
		    return view('chart', compact('site_title', 'pastRides'));
    }
}

