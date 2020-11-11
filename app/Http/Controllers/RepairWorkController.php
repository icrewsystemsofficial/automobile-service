<?php

namespace App\Http\Controllers;

use App\Models\RepairWork;
use Illuminate\Http\Request;

class RepairWorkController extends Controller
{  
   public function __construct()
   {
      $this->middleware('auth');
   }

    public function repair()
    {
        return  view('RepairWork');
    }
     
    public function addWork(Request $request)
    {
        // dd($request->all());
        $work = new RepairWork;
        
        $work->name=$request->input('name');
        $work->email=$request->input('email');
        $work->phone=$request->input('phone');
        $work->mainwork=$request->input('mainwork');
        $work->otherwork=$request->input('otherwork');
        $work->save();
  
        return back()->with('workadded','Thank you for Choosing our service');
    }
    
}
