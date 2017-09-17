<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends ClientController
{
        public function getAllUsers() {
        $users = $this->fetchAllUsers();

        return view('users.all-users', ['users' => $users]);
    }
}
