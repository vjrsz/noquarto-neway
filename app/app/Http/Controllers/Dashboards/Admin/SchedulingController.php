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

        return redirect()->back()->withSuccess('Editado com sucesso!');

    }
}
