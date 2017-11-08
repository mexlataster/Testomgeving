<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class CheckRoleController extends Controller
{
    public function index()
    {
    	$user = User::find(1);

    	return view('roletest', ['user' => $user]);
    }
}
