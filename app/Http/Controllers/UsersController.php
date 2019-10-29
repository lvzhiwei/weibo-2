<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * 显示所有用户列表的页面, 对应路由 /users
     */
    public function index()
    {

    }

    /**
     * 显示用户个人信息页面, 对应路由 get /users/{user}
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * 用户注册页面, 对应路由 get /users/create
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 创建用户, 对应路由  post /users
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '欢迎, 您将在这里开启一段新的旅程~');
        return redirect()->route('users.show', [$user]);
    }

    /**
     * 编辑用户个人资料页面, get /users/{user}/edit
     */
    public function edit()
    {

    }

    /**
     * 更新用户信息, PATCH /users/{user}
     */
    public function update()
    {

    }

    /**
     * 删除用户信息 DELETE /users/{user}
     */
    public function delete()
    {

    }

}
