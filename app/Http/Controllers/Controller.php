<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Business;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




  public function homepage()
    {
         $business = Business::all();

        return view('homepage',compact('business'));
    }

      public function addbusiness()
    {
        return view('form');
    }



public function uploadbusiness(Request $request)
    
        {


       if ($request->hasFile('logo')) {
        $image = $request->file('logo');
        $name =$image->getClientOriginalExtension().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/logo');
        $image->move($destinationPath, $name);



        $resource= new business();
        $resource->name = $request->name;        
        $resource->description = $request->description;
        $resource->category = $request->category;
        $resource->image = $name;
        $resource->save();   
          
          }

return redirect('/');
    }
}