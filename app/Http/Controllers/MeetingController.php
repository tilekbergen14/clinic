<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;

class MeetingController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            "doctor_id" =>"required",
            "date" => "required",
            "time" => "required",
        ]);
        Meeting::create([
            "user_id" => $request->user()->id,
            "doctor_id" => $request->doctor_id,
            "date" => $request->date,
            "time" => $request->time,
        ]);
        return back();
    }
    public function delete(Request $request){
        if($request->id){
            Meeting::find($request->id)->delete();
        }
        return back();
    }
}
