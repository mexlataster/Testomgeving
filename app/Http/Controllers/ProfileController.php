<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('roles');
    }

    public function index()
    {
        $users = DB::table('users')->get();

        return view('user', ['users' => $users]);
    }
}