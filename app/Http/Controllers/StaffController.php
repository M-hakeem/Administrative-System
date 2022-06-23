<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function staff()
    {
        return view('Staff.reg_staff');
    }

    public function store(StoreStaffRequest $request)
    {
        $code = 'HIS-' .rand(100000, 999999);

        auth()->user()->staffs()->create($request->validated()+['code'=> $code]);

        return back()->with('message','data added successfully');
    }

    public function show(Staff $staff)
    {
        $staffs = $staff->whereCategory('Permanent')->latest()->filter(request(['search']))
        ->paginate(10);

        return view('Staff.staff_data',compact('staffs'));
    }

    public function casual(Staff $staff)
    {
        $casuals = $staff->whereCategory('Casual')->latest()->filter(request(['search']))
        ->paginate(10);

        return view('Staff.casual_staff_data',compact('casuals'));
    }

    public function view(Staff $staff)
    {
        return view('Staff.staff_data_view',compact('staff'));
    }

    public function edit(Staff $staff)
    {
        return view('Staff.staff_data_update',compact('staff'));
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        // if ($staff->user_id != auth()->id())
        // {
        //     abort(403,'Unauthorized Action');
        // }

        $staff->update($request->validated());

        return back()->with('message','data updated successfully');
    }

    Public function delete(Staff $staff)
    {
        if($staff->user_id != auth()->id())
        {
            return back()->with('message','Unauthorised Action');
        }
        $staff->delete();

        return back()->with('message','data deleted successfully');
    }
}
