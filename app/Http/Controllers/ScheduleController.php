<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

use function Ramsey\Uuid\v1;

class ScheduleController extends Controller
{
    public function schedules()
    {
        return view('backend.add_schedule');
    }
    public function store(Request $req)
    {
        // Validate the request data
        $req->validate([
            'class_time' => 'required|string|max:255',
            'gym_programs' => 'required|string|max:255',
        ]);

      $schedule = new Schedule();
      $schedule->class_time = $req->class_time;
      $schedule->gym_programs = $req->gym_programs;
      $schedule->save();

        // Redirect with success message
        return redirect('schedules')->with('success', 'Schedule added successfully!');
    }
    public function show()
    {
        $schedules = Schedule::all();
        return view('backend.schedule_show' , compact('schedules'));
    }

    public function edit($id)
    {
    $schedule = Schedule::findOrFail($id); 
    return view('backend.schedule_edit', compact('schedule')); 

    }

    public function update(Request $request, $id)
{
    $request->validate([
        'class_time' => 'required|string|max:255',
        'gym_programs' => 'required|string|max:255',
    ]);

    $schedule = Schedule::findOrFail($id); 
    $schedule->update([
        'class_time' => $request->class_time,
        'gym_programs' => $request->gym_programs,
    ]);
    $schedule->save();

    return redirect()->route('schedule.show')->with('success', 'Schedule updated successfully!');
}

public function destroy($id)
{
    $schedule = Schedule::findOrFail($id); 
    $schedule->delete(); 

    return redirect()->route('schedule.show')->with('success', 'Schedule deleted successfully!');
}




}

