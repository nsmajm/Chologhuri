<?php

namespace App\Http\Controllers;

use App\Model\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.Author.createEvent');
    }

    public function createEvent(Request $request){
        $event = new Event();
        $event->host_user_id = Auth::id();
        $event->eventName = $request->eventTitle;
        $event->eventDescription = $request->eventBody;
        $event->eventLocation = $request->location;
        $event->eventDuration = $request->duration;
        $event->eventDate = $request->date;
        $event->eventTimeStart = $request->time;
        $event->additionalBudget = $request->budget;
        $event->maxperson = $request->addinfo;
        if($request->has('thumbnail')){
            $originalImage= $request->file('thumbnail');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath = public_path().'/EventImage/event/';
            $originalPath = public_path().'/EventImage/Orginal/';
            $orginalName = time().$originalImage->getClientOriginalName();
            $thumbnailImage->save($originalPath.$orginalName);
            $thumbnailImage->resize(555,279);
            $thumbnailName = time().$originalImage->getClientOriginalName();
            $thumbnailImage->save($thumbnailPath.$thumbnailName);
        }
        $event->eventImage =time().$originalImage->getClientOriginalName();
        $event->save();
        return redirect()->route('author.index');
    }
    public function eventDetails($id){
        $event = Event::findOrFail($id);
        return $event;
    }


}
