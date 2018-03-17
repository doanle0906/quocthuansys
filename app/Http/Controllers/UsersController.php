<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login(){
        return view('user.login');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function postLogin(Request $request){

        $username = $request->input('username');
        $password = $request->input('password');
        $results = DB::select('exec sp_CheckLogin ?, ?',[$username,$password]);
        $information = [];
        if($results) {
           foreach ($results as $result) {
               $information['sts'] = $result->ErrCode;
               $information['msg'] = $result->ErrMsg;
           }
        }
        if(! $information['sts']) {
            return view('user.login',['information' => $information ]);
        }
        return view('home',['information' => $information ]);

    }
}
