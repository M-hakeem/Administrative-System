<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDistributorRequest;
use App\Http\Requests\UpdateDistributorRequest;
use App\Models\Distributor;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DistributorController extends Controller
{
    public function register()
    {
        return view('Distributor.reg_distributor');
    }

    public function store(StoreDistributorRequest $request)
    {
        // Generate random string
        $code = 'HID-'.rand(100000, 999999);

        auth()->user()->distributors()->create($request->validated() + ['code' => $code]);

        return back()->with('message', 'data added successfully');
    }

    public function show(Distributor $distributor)
    {
        $distributors = Distributor::whereStatus('Active')->latest()->paginate(10);

        return view('Distributor.distributor_data', compact('distributors'));
    }

    public function suspended(Distributor $staff)
    {
        $suspended = Distributor::whereStatus('Inactive')->latest()->paginate(10);

        return view('Distributor.suspended_distributor_data',compact('suspended'));
    }

    public function view(Distributor $distributor)
    {
        return view('Distributor.dist-data-view',compact('distributor'));
    }

    public function edit(Distributor $distributor)
    {
        return view('Distributor.distributor_update',compact('distributor'));
    }

    public function update(UpdateDistributorRequest $request, Distributor $distributor)
    {
        if($distributor->user_id != auth()->id())
        {
            abort(403,'Unauthorized Action');
        }

        $distributor->update($request->validated());

        return back()->with('message','data updated successfully');
    }

    public function delete(Distributor $distributor)
    {

        if($distributor->user_id != auth()->id())
        {
            return back()->with('message','Unauthorised Action');
        }
        $distributor->delete();

        return back()->with('message','data deleted successfully');
    }
}
