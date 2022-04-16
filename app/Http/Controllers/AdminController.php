<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\User;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
        $this->middleware(function ($request, $next) {
            if(!(Auth::user()->role === "admin")){
                return redirect()->route('home');
            }
            return $next($request);
        });
    }
    public function index(){
        $doctors = Doctor::get();
        return view("admin.index", ["doctors" => $doctors]);
    }
    public function doctor(){
        $positions = Position::get();
        $users = User::where("role", "=", "doctor")->get();
        return view("admin.adddoctor", ["positions" => $positions, "users" => $users]);
    }
    public function adddoctor(Request $request){
        $this->validate($request, [
            "dr_position" => "required",
            "dr_name" => "required"
        ]);
        Doctor::create([
            "user_id" => $request->dr_name,
            "position_id" => $request->dr_position
        ]);
      
        return back();
    }
    public function position(Request $request){
        return view("admin.addposition");
    }
    public function addposition(Request $request){
        $this->validate($request, [
            "position" => "required"
        ]);
        Position::create([
            'name' => $request->position,
        ]);
        return back();
    }

    public function delete_position(Request $request){
        if($request->id){
            Position::find($request->id)->delete();
        }
        return back();
    }
    public function delete_doctor(Request $request){
        if($request->id){
            Doctor::find($request->id)->delete();
        }
        return back();
    }
}
