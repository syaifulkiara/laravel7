<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class OvertimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = \App\User::with('activity')->where('id', Auth::user()->id)->first();
        return view('overtime.index',compact('act'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
       $this->validate($request,[
            'day_date'  => 'required'
       ]);

       $act= \App\Overtime::Create([
            'id_user'   => Auth::user()->id,
            'day_date'  => $request->day_date,
            'start'     => $request->start,
            'finish'    => $request->finish,
            'ot'        => $request->ot,
            'project_no'=> $request->project_no,
            'activity'  => $request->activity,
            'location'  => $request->location,
            'cek'       => $request->cek
        ]);

       return redirect()->back()->with('success','Data Berhasil Ditambah');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
