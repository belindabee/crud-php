<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function show()
    {
        $data['username']='admin';
        $data['theme']='biru';
        $data['tanggal_login']='2019-05-11 09:00:00';

        return view('user.profile', ['data' =>$data]);
    }
}