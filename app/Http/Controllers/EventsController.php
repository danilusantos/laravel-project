<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Http\Requests\Events;

class EventsController extends Controller
{
    public function index(){
        $events = Event::where('status', '1')->orderBy('created_at', 'desc')->get();

        return view('site.pages.events.home.index', ['events' => $events]);
    }

    public function create(){
        $errors = null;

        return view('site.pages.events.createEvent.index', ['errors' => $errors]);
    }

    public function store(Events $request){
        if($request){
            $event = new Event;

            $slugSemEspaco = preg_replace('/[ -]+/' , '-' , $request->title);

            $slug = strtolower(preg_replace("[^a-zA-Z0-9-]", "-", strtr(utf8_decode(trim($slugSemEspaco)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"), "aaaaeeiooouuncAAAAEEIOOOUUNC-")));

            $event->title           = $request->title;
            $event->city            = $request->city;
            $event->description     = $request->description;
            $event->private         = $request->private;
            $event->status          = 1;
            $event->slug            = $slug;

            //Image Upload

            if($request->hasFile('imageEvent') && $request->file('imageEvent')->isValid()){

                $requestImage = $request->imageEvent;

                $extension = $requestImage->extension();

                $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

                $requestImage->move(public_path('site/img/events'), $imageName);

                $event->image = $imageName;

            }

            elseif (!$request->hasFile('image')){

                $extension = "png";

                $imageName = 'without-image.'.$extension;

                $event->image = $imageName;

            }

            $event->save();

            return redirect()->route('events')->with('msg', 'Evento criado com sucesso!');
        }
    }

    public function show($slug){

        $event = Event::where('slug', $slug)->first();

        return view('site.pages.events.showEvent.index', ['event' => $event]);

    }
}
