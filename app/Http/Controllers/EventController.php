<?php

namespace App\Http\Controllers;
use App\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
	public function index()
	{
		$events = Event::getAll();
		return view('events.index',['events' => $events]);
	}

	public function show($id)
	{
		$event = Event::find($id);

		return view('events.show',['event' => $event]);
	}

	public function edit($id)
	{
		$event = Event::find($id);

		return view('events.edit',['event' => $event]);
	}

	public function update(Request $request, $id)
	{
		$event = Event::find($id)->update($request->all());

		return view('events.index',['event' => $event]);
	}
}
