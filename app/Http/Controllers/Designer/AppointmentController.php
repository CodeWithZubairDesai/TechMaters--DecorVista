<?php

namespace App\Http\Controllers\Designer;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
class AppointmentController extends Controller
{
    //
    public function index(Request $request)
    { 
        $appointments = Appointment::get();    
        return DataTables::of($appointments)
            ->addIndexColumn()
            ->addColumn('action', function ($model) {
                $editRoute = route('designer.appointments.edit', $model->id);
                $detailRoute = route('designer.appointments.show', $model->id);
                return '<div class="d-flex gap-2">
                    <a href="' . $detailRoute . '" class="btn btn-light btn-sm">
                        <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                    </a>
                    <a href="' . $editRoute . '" class="btn btn-soft-primary btn-sm">
                        <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
                    </a>
                </div>';
            })
            ->addColumn('status', function ($model) {
                return view('designer.layouts.action.statustoggle', [
                    'status' => $model->status,
                    'id' => $model->id
                ]);
            })
            ->rawColumns(['image', 'action', 'status'])
            ->make(true);
        return view('designer.appointments.index');        
    }
}
