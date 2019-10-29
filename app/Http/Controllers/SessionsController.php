<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     * 登录表单 get /login
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * 登录 post /login
     * @param Request $request
     */
    public function store(Request $request)
    {
        $user = User::where('')
    }

    /**
     * 退出登录, 清除 session
     * @param Request $request
     */
    public function destroy(Request $request)
    {

    }
}
