<?php

namespace App\Http\Controllers;

use App\Events;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    //
    public function index()
    {
        $events = Events::all();
        $event = [];
        foreach ($events as $row)
        {
            $enddate = $row->end_date."12:00:00";
            $event[] = \Calendar::event(
                $row->title,
                true,
                new DateTime($row->start_date),
                new DateTime($row->end_date.'+1 day'),
                $row->id,
                [
                    'color' => $row->color,
                ]
            );
        }
        $calendar = \Calendar::addEvents($event);
        return view('events.eventpage', compact('events', 'calendar'));
    }

    public function create()
    {
        return view('events.addevent');
    }

    public function store(Request $request)
    {
//        dd($request);

        $events = new Events();
        $events = Events::create($request->all());
        $events->save();
        return redirect('/events');
    }
}
