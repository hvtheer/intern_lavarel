<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(UserRequest $request)
    {
        Session::push('users', $request->validated());

        return view('admin.user.index', [
            'users' => $this->getSessionUsers(),
        ]);
    }

    private function getSessionUsers()
    {
        return collect(Session::get('users'));
    }

    public function mail()
    {
        return view('admin.user.mail');
    }
}