<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminMail;
use App\Mail;

class AdminMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = Mail::all()->toArray();


        return view('adminmail.index', compact('cruds'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminmail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new AdminMail([
          'user' => $request->get('user'),
          'onderwerp' => $request->get('onderwerp'),
          'message' => $request->get('message')
        ]);

        $crud->save();

        return redirect('/adminmail');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Mail::find($id);

        return view('adminmail.edit', compact('crud','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $crud = AdminMail::find($id);
        $crud->user = $request->get('user');
        $crud->onderwerp = $request->get('onderwerp');
        $crud->message = $request->get('message');
        $crud->save();

        return redirect('/adminmail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $crud = Mail::find($id);
      $crud->delete();

      return redirect('/adminmail');
    }
}
