<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
  public function viewTestimonial()
  {  
      $data = Testimonial::all();
      return view('viewTestimonial',['data' => $data]);
  }
  
  public function addTestimonials(Request $request)
  {
      $testi = new Testimonial;
      
      $testi->name=$request->input('name');
      $testi->msg=$request->input('msg');
      $testi->save();

      return back()->with('added','Thank you saying your exprience');
  }
}
