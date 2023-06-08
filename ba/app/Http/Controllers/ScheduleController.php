<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::get();
        return view('schedule.index',['schedules'=>$schedules]);
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
        //
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
        $schedule =Schedule::find($id);
        return view('schedule.edit',compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $schedule=Schedule::find($id);
        $schedule->name = $request->name;
        $schedule->email = $request->email;
        $schedule->days = $request->days;
        $schedule->time = $request->time;
        
        
        $blogsupport->update();      
        return redirect()->route('schedule.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $schedule =Schedule::find($id);

        $schedule->delete();
        return view('schedule.index');
    }
}
