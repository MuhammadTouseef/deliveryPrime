<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Users;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{



    public function authenticate(Request $request)
    {
        $fields = $request->validate([
            'username' => ['required', Rule::exists('users', 'username')],
            'password' => 'required|min:6'
        ]);
        if (auth()->attempt($fields)) {
            $request->session()->regenerate();
            if (auth()->user()->role()->first('name')->name == 'Business') {
                return redirect('/business/home');
            } elseif (auth()->user()->role()->first('name')->name == 'Admin') {
                return redirect('/admin/home');
            } else {
                return redirect('/customer/home');
            }
            return redirect('')->with('message', 'Logged in successfully');
        } else {
            return back()->withErrors([
                'username' => 'Invalid Login Credentials'
            ]);
        }
    }

    public function adminRegsiter()
    {

    }

    # Admin


    public function AdminHome()
    {
        return view('admin.home');
    }

    public function manageAdmins()
    {
        return view('admin.manageadmins', [
            'admins' => Users::where('roles_id', '=', '1')->get(['id', 'name', 'email', 'username'])

        ]);
    }
    public function adminDelete(Users $users){

        $users->delete();
            return response('Deleted Successfully', 200);
        }











    # Admin End


    # Restaurant Manager

    public function businessRegister()
    {
        return view('business.register');
    }

    public function businessStore(Request $request)
    {
        $field = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'business' => ['required'],
            'address' => 'required',
            'contact' => ['required', 'min:10'],
            'location' => ['required'],
            'location' => 'required'


        ]);

        $field['password'] = bcrypt($field['password']);

        $user = Users::create([
            'name' => $field['name'],
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => $field['password'],
            'contactnumber' => $field['contact'],
            'roles_id' => '5'
        ]);

        Business::create([
            'user_id' => $user->id,
            'business_name' => $field['business'],
            'city' => $field['location'],
            'address' => $field['address'],
            'is_Verified' => false
        ]);
        auth()->login($user);

        event(new Registered($user));

        return redirect('/');
    }

    public function Login(Request $request)
    {

        return view('main.login', ['type' => $request['type']]);

    }

    public function businessHome()
    {
        return view('business.home');
    }
    # End Restaurant


    # Customer
    public function customerHome()
    {
        return view('customer.home');
    }

    # End Customer


}
