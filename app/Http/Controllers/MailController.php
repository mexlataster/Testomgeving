<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\AdminMail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cruds = AdminMail::all()->toArray();

        return view('mail.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crud = new Mail([
          'user' => $request->get('user'),
          'onderwerp' => $request->get('onderwerp'),
          'message' => $request->get('message')
        ]);

        $crud->save();

        return redirect('/mail');
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
        $crud = AdminMail::find($id);

        return view('mail.edit', compact('crud','id'));

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
        $crud = Mail::find($id);
        $crud->user = $request->get('user');
        $crud->onderwerp = $request->get('onderwerp');
        $crud->message = $request->get('message');
        $crud->save();

        return redirect('/mail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $crud = AdminMail::find($id);
      $crud->delete();

      return redirect('/mail');
    }
}
