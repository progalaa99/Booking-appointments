<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ifdoctorpresent;
use Carbon\Carbon;

class IfDoctorPresentController extends Controller
{
    /**
     * Display a listing of the resource.
     * ['days','start_time','end_time'];

     */
    public function index()
    {
        $days = ifdoctorpresent::get();
        $start_time= ifdoctorpresent::select( 'start_time')->get();
        $end_time = ifdoctorpresent::select('end_time')->get();
        return view('doctorpresent.index',['days'=>$days,'start_time'=>$start_time,'end_time'=>$end_time]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $timeSelected = $request->time;
        $daySelected = $request->day;
        $start_time = ifdoctorpresent::select('start_time')->first();
        $end_time = ifdoctorpresent::select('end_time')->first();

        $startDateTime = Carbon::parse($start_time->start_time);
        $endDateTime = Carbon::parse($end_time->end_time);
        $selectedDateTime = Carbon::parse($timeSelected);

        if ($selectedDateTime->between($startDateTime, $endDateTime)) {
             echo "The selected time is valid.";
         } else {
    echo "The selected time is not valid.";
}

       

        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
