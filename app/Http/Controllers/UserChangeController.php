<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserChangeController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')->get();

        $url = $request->is('userChange/*');


        return view('userChange', ['users' => $users], ['url' => $url]);
    }

    public function edit(Request $request, $id)
    {
    	$user = DB::table('users')->where('id', $id)->first();

    	$url = $request->is('userChange/*');

		return view('userChange', ['user' => $user], ['url' => $url]);
    }

    public function update($id, Request $request)
    {

        //validate post data
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        //get post data
        $postData = $request->all();
        
        //update post data
        User::find($id)->update($postData);
        


    }
}
