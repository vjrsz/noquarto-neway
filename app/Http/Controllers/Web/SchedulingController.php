<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Http\Requests\StoreSchedulingRequest;
use App\Http\Requests\UpdateSchedulingRequest;
use App\Models\BlockedDate;
use Illuminate\Support\Facades\Request;

class SchedulingController extends Controller
{
    public function finish(Scheduling $scheduling)
    {   
        return view('web.finish', [
            'scheduling' => $scheduling
        ]);
    }

    public function store(StoreSchedulingRequest $request)
    {
        $scheduling = Scheduling::create($request->all());

        return redirect()->route('web.scheduling.finish', ['scheduling'=> $scheduling->id])->withInput()->withSuccess('Cadastrado com sucesso!');
    }

    public function date_valid(Request $request){
        $date = request()->date;
        $time = request()->time;

        $success = true;

        $dates = BlockedDate::where('date', $date)->get();

        if( count($dates) ){
            $success = false;
        }

        $dates = Scheduling::where('date', $date)->get();

        if( count($dates) ){
            foreach($dates as $date){
                $timeaux = date('H:i', strtotime( $date->time ) + 60*60);
                if ( strtotime($time) >= strtotime($date->time) && strtotime($time) < strtotime($timeaux) ){
                    $success = false;
                    break;
                } 
            }
        }
        
        return ['success' => $success];
    }
}
