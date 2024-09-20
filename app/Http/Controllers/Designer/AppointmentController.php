<?php

namespace App\Http\Controllers\Designer;

use App\Models\Appointment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function index(Request $request) {
        $Appointments = Appointment::with(['designer', 'user', 'consultant'])->where('designer_id', Auth::user()->id)->get();

        log::info('Appointment Data' . $Appointments);
    return view('designer.appointments.index', compact('Appointments'));
}
}

