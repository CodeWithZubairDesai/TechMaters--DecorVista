<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;
class OrderController extends Controller
{
    //
    public function index(Request $request)
    { 
    
        if ($request->ajax()) {    
            $orders = Order::with(['billings', 'orderdetails','users'])->get();    
            log::info($orders);
    
            return DataTables::of($orders)
                ->addIndexColumn()
                ->addColumn('image', function ($model) {
                    if ($model->images->isNotEmpty()) {
                        return $model->images->first()->image_path;
                    } else {
                        return 'No Image';
                    }
                })
                ->addColumn('action', function ($model) {
                    $detailRoute = route('admin.orders.show', $model->id);
                    return '<div class="d-flex gap-2">
                        <a href="' . $detailRoute . '" class="btn btn-light btn-sm">
                            <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
                        </a>
                        
                    </div>';
                })
                ->addColumn('status', function ($model) {
                    return view('admin.layouts.action.statustoggle', [
                        'status' => $model->status,
                        'id' => $model->id
                    ]);
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
    
        return view('admin.blogs.index', compact('ParentBlogs'));
    }
    
}
