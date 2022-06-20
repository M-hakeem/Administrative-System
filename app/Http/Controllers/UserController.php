<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Distributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Mail\accountVerification;

class UserController extends Controller
{
    public function index()
    {

        return view('User.index');
    }

    public function authenticate(Request $request)
    {
        $loginForm = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (auth()->attempt($loginForm)) {
            $request->session()->regenerate();
            if (auth()->user()->status == 'Active') {
                return redirect(route('dashboard'))->with('message', 'You are logged In!');
            } elseif (auth()->user()->status == 'Deactivated') {
                auth()->logout();
                return back()->with('message', 'Your account is deactivated');
            } else {
                auth()->logout();
                return back()->with('message', 'You are yet to activate your account!');
            }
        }

        return back()->with('message', 'Invalid Credentials!');
    }

    public function dashboard()
    {
        $user = auth()->user();

        $item = [];


        $item['distributor_count'] = DB::table('distributors')->count();

        $item['staff_count'] = DB::table('staff')->count();

        // $distributor_count = Distributor::where('id','')->count();

        return view('dashboard', compact('item'));
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
        Mail::to($data['email'])->send(new accountVerification(
            $data['firstname'],
            $data['lastname'],
            $data['email'],
            $request['password']
        ));

        return back()->with('message', 'data added successfully');
    }


    public function show(User $user)
    {
        $users = User::whereRole('sub')->paginate(10);

        $users = $users->filter(function ($user) {
            if ($user->status == 'Active' || $user->status == 'Deactivated') {
                return $user;
            }
        });

        return view('User.admin_data', compact('users'));
    }

    public function view(User $user)
    {
        return view('User.admin_data_view', compact('user'));
    }

    public function edit(User $user)
    {
        return view('User.admin_data_update', compact('user'));
    }

    public function update(UpdateAdminRequest $request, User $user)
    {
        $data = $request->validated();

        $user->update($data);

        return redirect(route('admin.show'))->with('message', 'data updated
        successfully');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect(route('admin.show'))->with('message', 'data deleted successfully');
    }

    public function userprofile(User $user)
    {
        $user = auth()->user();

        return view('User.admin_profile', compact('user'));
    }

    public function reset(User $user)
    {
        return view('User.admin_reset_password', compact('user'));
    }

    public function resetPassword(UpdatePasswordRequest $request)
    {
        $data = $request->validated();

        if (Hash::check($data['currentPassword'], auth()->user()->password)) {
            $data['password'] = Hash::make($request['password']);

            auth()->user()->update($data);

            return redirect(route('admin.profile'))->with('message', 'password changed successfully');
        }

        return back()->with('message', 'Incorrect User Password');
    }

    public function updateStatus($email)
    {
        DB::table('users')->whereEmail($email)->update(['status' => 'Active']);

        auth()->logout();

        return redirect(route('login'))->with('message', 'Account Updated Successfully');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('message', 'you have been logged out!');
    }
}
