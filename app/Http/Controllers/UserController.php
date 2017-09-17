<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ClientController
{
    public function getAllUsers() {
        $users = $this->fetchAllUsers();

        return view('users.all-users', ['users' => $users]);
    }

    public function getUserId() {
        return view('users.input-user');
    }

    public function getAUser(Request $request) {
        $this->validate($request,['userId' => 'required|numeric']);

        $userId = $request->get('userId');
        $user = $this->fetchAUser($userId);

        return view('users.single-user', ['user' => $user]);
    }
}
