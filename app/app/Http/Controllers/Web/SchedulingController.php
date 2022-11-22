<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Scheduling;
use App\Http\Requests\StoreSchedulingRequest;
use App\Http\Requests\UpdateSchedulingRequest;

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
}
