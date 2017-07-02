<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Meeting;
use App\Models\LostFound;
use App\Models\Visitor;

use App\Models\Drop;
use App\Models\Deliver;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request, $id)

    {
         
        if ($id=='mN') {

             $data = Meeting::select("meetingName as name")->where("meetingName","LIKE","%{$request->input('query')}%")->get();
             
             return response()->json($data);
   
    }elseif ($id=='mP') {
             $data = Meeting::select("visitReason as name")->where("visitReason","LIKE","%{$request->input('query')}%")->get();

             return response()->json($data);
    }elseif ($id=='vN') {

        $data = Visitor::select("visitorName as name")->where("visitorName","LIKE","%{$request->input('query')}%")->get();

             return response()->json($data);
    }elseif ($id=='vC') {
          $data = Visitor::select("visitorCompanyName as name")->where("visitorCompanyName","LIKE","%{$request->input('query')}%")->get();

             return response()->json($data);
    }elseif ($id=='vE') {
          $data = Visitor::select("visitorEmail as name")->where("visitorEmail","LIKE","%{$request->input('query')}%")->get();

             return response()->json($data);
    }elseif ($id=='dC') {
        # code...
    }
        }
       




        
}