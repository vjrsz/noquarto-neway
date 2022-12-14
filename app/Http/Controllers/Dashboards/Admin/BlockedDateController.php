<?php

namespace App\Http\Controllers\Dashboards\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlockedDate;
use App\Http\Requests\StoreBlockedDateRequest;
use App\Http\Requests\UpdateBlockedDateRequest;
use Illuminate\Http\Request;

class BlockedDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dash.admin.blockeddate.index', [
            'blockeddates' => BlockedDate::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function store(StoreBlockedDateRequest $request)
    {
        BlockedDate::create($request->all());

        return redirect()->back()->withSuccess('Cadastrado com sucesso');
    }

    public function edit(BlockedDate $blockeddate, Request $request)
    {   
        $blockeddate->date = $request->date;
        $blockeddate->save();

        return redirect()->back()->withSuccess('Editado com sucesso');
    }

    public function destroy(BlockedDate $blockeddate)
    {
        $blockeddate->delete();

        return redirect()->back()->withSuccess('Deletado com sucesso');

    }
}
