<?php

namespace App\Http\Controllers\User;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function create()
    {
        return view("");
    }
    public function store(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'notes' => 'nullable|string|max:255',
        ]);

        // Store the appointment data
        $appointment = Appointment::create([
            'user_id'     => Auth::user()->id,  // Get the authenticated user's ID
            'designer_id' => $id,      // Get designer ID from the URL
            'notes'       => $validatedData['notes'],
        ]);
        if(!$id)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid Designer Id',
                'data' => null,
            ], 200);
        }
        else{
            return response()->json([
                'status' => 'success',
                'message' => 'Your appointment has been scheduled, Please wait for the designer to respond',
                'data' => null,
            ], 200);
        }

        // Optionally, you can redirect the user or return a response
        return redirect()->route('appointments.index')  ;
    }
}
