<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Models\Distributor;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){

        return view('User.index');
    }

    public function authenticate(Request $request)
    {
        $loginForm = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(auth()->attempt($loginForm)){
            $request->session()->regenerate();

            return redirect(route('dashboard'))->with('message','You are logged In!');
        }

        return back()->with('message','Invalid Credentials!');
    }

    public function dashboard()
    {
        $user = auth()->user();

        $item = [];


        $item['distributor_count'] = DB::table('distributors')->count();

        $item['staff_count'] = DB::table('staff')->count();

        // $distributor_count = Distributor::where('id','')->count();

        return view('dashboard',compact('item'));
    }

    public function admin()
    {
        return view('User.reg_admin');
    }

    public function store(StoreAdminRequest $request)
    {
        $data =  $request->validated();

        $data['password'] = Hash::make($request['password']);

        User::create($data);

        return back()->with('message','data added successfully');
    }


    public function show(User $user)
    {
        $users = User::whereRole('sub')->paginate(10);

        return view('User.admin_data',compact('users'));
    }

    public function view(User $user)
    {
        return view('User.admin_data_view',compact('user'));
    }

    public function edit(User $user)
    {
        return view('User.admin_data_update',compact('user'));
    }

    public function update(UpdateAdminRequest $request,User $user)
    {
        $data = $request->validated();

        $data['password'] = Hash::make($request['password']);

        $user->update($data);

        return redirect(route('admin.show'))->with('message','data updated successfully');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect(route('admin.show'))->with('message','data deleted successfully');
    }

    public function userprofile(User $user)
    {
        $user = auth()->user();
        
        return view('User.admin_profile',compact('user'));
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('message','you have been logged out!');
    }
}
