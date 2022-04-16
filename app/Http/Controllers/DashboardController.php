<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DashboardController extends Controller
{
    public function index(){
        $doctors = Doctor::get();
        return view("dashboard", ["doctors" => $doctors]);
    }
}
