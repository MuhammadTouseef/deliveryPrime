<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Categories;
use App\Models\Dishes;
use App\Models\Roles;
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

        } else {
            return back()->withErrors([
                'username' => 'Invalid Login Credentials'
            ]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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

    public function adminDelete(Users $users)
    {

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
//        dd($request);
        $field = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'business' => ['required'],
            'address' => 'required',
            'contact' => ['required', 'min:10'],
            'location' => ['required'],
            'categories'=>['required']


        ]);
        $cat = Categories::find($field['categories']);


        $field['password'] = bcrypt($field['password']);

        $user = Users::create([
            'name' => $field['name'],
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => $field['password'],
            'contactnumber' => $field['contact'],
            'roles_id' => '2',

        ]);
        $busn = new Business();
        $busn->user_id = $user->id;
        $busn->business_name = $field['business'];
        $busn->city = $field['location'];
        $busn->address = $field['address'];
        $busn->is_Verified = false;
        $busn->save();
        $busn->categories()->attach($cat);

//        Business::create([
//            'user_id' => $user->id,
//            'business_name' => $field['business'],
//            'city' => $field['location'],
//            'address' => $field['address'],
//            'is_Verified' => false
//        ]);

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

    public function businessDishes()
    {
        return view('business.dishes', [
            'dishes' => Dishes::where('business_id', '=', auth()->user()->business()->get('id')->first()->id)->get()
        ]);
    }
    # End Restaurant


    # Customer
    public function customerHome()
    {
        return view('customer.home');
    }

    public function customerregiter(){
        return view('customer.register');
    }

    public function customerstore(Request $request){
        $field = $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:3', Rule::unique('users', 'username')],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'contact' => ['required', 'min:10'],



        ]);



        $field['password'] = bcrypt($field['password']);

        $user = Users::create([
            'name' => $field['name'],
            'username' => $field['username'],
            'email' => $field['email'],
            'password' => $field['password'],
            'contactnumber' => $field['contact'],
            'roles_id' => Roles::where('name', '=', 'Customer')->first('id')['id']




        ]);
        auth()->login($user);

        event(new Registered($user));

        return redirect('/customer/home');
    }

    # End Customer


}
