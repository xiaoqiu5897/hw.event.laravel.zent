<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::getAll();
        return view('events.index',['events' => $events]);
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
    public function store(Request $request)
    {
        $event=new Event();
        $event->title = $request->title;
        $event->content = $request->content;
        $event->time = $request->time;
        $event->location = $request->location;

        $event->save();
        // $event = Event::create($request->all());
        // var_dump($event);
        return response()->json(['data'=>$event],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return response()->json(['data'=>$event,'name'=>'Xiaoqiu5897'],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $event = Event::find($id);
       return response()->json(['data'=>$event,'name'=>'Xiaoqiu5897'],200);
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
        // $event = Event::find($id)->update($request->all());
       $event=new Event();
       $event->title = $request->title;
       $event->content = $request->content;
       $event->time = $request->time;
       $event->location = $request->localtion;

       $event->save();

       return response()->json(['data'=>$event,'name'=>'Xiaoqiu5897'],200);
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Event::find($id)->delete();
       return response()->json(['data'=>'removed'],200);
   }
}
