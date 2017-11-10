<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class CheckRoleController extends Controller
{
    public function index(Request $request)
    {
    	$user = $request->user();

    	return view('roletest', ['user' => $user]);
    }
}
