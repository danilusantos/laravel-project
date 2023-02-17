<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class HomeController extends Controller
{
    public function index(){

        $events = Event::all()->where('status', '1');

        return view('site.home.index', ['events' => $events]);
    }


}
