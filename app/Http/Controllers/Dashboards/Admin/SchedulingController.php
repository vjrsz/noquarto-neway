<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Http\Requests\StoreSchedulingRequest;
use App\Http\Requests\UpdateSchedulingRequest;
use Illuminate\Http\Request;

class SchedulingController extends Controller
{
    public function edit(Request $request, Scheduling $scheduling)
    {
        $scheduling->time = $request->time;
        $scheduling->date = $request->date;
        $scheduling->save();
    
        $user = new \stdClass();
        $user->email = $scheduling->email;
        $user->name = $scheduling->name;
        
        \Illuminate\Support\Facades\Mail::send(new \App\Mail\newScheduling($user, $scheduling));
    
        return redirect()->back()->withSuccess('Aprovado com sucesso!');
    }
    public function blocked_hours(Request $request)
    {
        dd($request);
    
        return redirect()->back()->withSuccess('Aprovado com sucesso!');
    }
}
