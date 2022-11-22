<?php

namespace App\Http\Controllers\Dashboards\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserPhotoRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Scheduling;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login()
    {
        return view('dash.admin.login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard.admin.login');
    }
    public function do_login(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors('Email inválido.');
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (!Auth::attempt($credentials, $request->remember == 'on' ? true : false)) {
            return redirect()->back()->withInput()->withErrors('Email ou senha inválidos.');
        }

        return redirect()->route('dashboard.admin.index');
    }

    //Dashboard
    public function index(Request $request)
    {
        $request->flash();
        $scheduling = Scheduling::orderBy('id', 'DESC');
        if( isset($request->filter_name) ){
            if( $request->filter_name ){
                $scheduling = $scheduling->where('name', 'LIKE', "%$request->filter_name%");
            }
        }
        return view('dash.admin.home', [
            'schedulings' => $scheduling->get(),
        ]);
    }
    public function perfil(){
        return view('dash.admin.perfil', [
            'auth' => User::find(Auth::id())
        ]);
    }
    public function do_edit(UpdateUserRequest $request){
        $auth = User::find(Auth::id());
        $auth->name = $request->name;
        $auth->email = $request->email;

        if ($request->password){
            if( $request->password != $request->password_confirm ) return redirect()->back()->withInput()->withErrors('Senhas não coincidem');
            $auth->email = Hash::make($request->password);
        } 
        
        $auth->save();

        return redirect()->back()->withSuccess('Alterado com sucesso!');
    }
    public function do_edit_photo(UpdateUserPhotoRequest $request){
        $auth = User::find(Auth::id());

        Storage::delete($auth->photo);
        dd($request->all());

        if($request->photo){
            $filename = date('YmdHis') .'.'. $request->photo->getClientOriginalExtension();
            $auth->photo = $request->photo->storeAs('scheduling', $filename);
        }

        $auth->save();

        return redirect()->back()->withSuccess('Alterado com sucesso!');
    }
}
