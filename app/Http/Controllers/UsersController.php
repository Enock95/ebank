<?php

namespace App\Http\Controllers;

use Keygen;
use App\Role;
use App\User;
use App\Account;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
       
    public function list(){
        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }

    public function index()
    {
        return view('admin.adduser.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($length = 10)
    {
        $pool = '0123456789';
        $account_no = substr(str_shuffle(str_repeat($pool, 10)), 0, $length);
        return view('admin.adduser.create')->with('account_no', $account_no);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */  
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'date' => 'required',
            'gender' =>'required',
            'name_empl' =>'required',
            'salary' =>'required',
            'residentiel' =>'required',
            'cot' =>'required',
            'tax' =>'required',
            'imf' =>'required',
            'atc' =>'required',
            'telex' =>'required',

        ]);
      
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt('password')
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'date' => $request->date,
            'number' => $request->number,
            'gender' => $request->gender,
            'name_empl' => $request->name_empl,
            'salary' => $request->salary,
            'residentiel' => $request->residentiel
        ]);
           
        $account = Account::create([
            'user_id' => $user->id,
            'account_no' => $request->account_no,
            'cot' => $request->cot,
            'tax' => $request->tax,
            'imf' => $request->imf,
            'atc' => $request->atc,
            'telex' => $request->telex,
            
        ]);



        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Gate::denies('edit-users')) {
            # code...
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.edit', [
            'user' => $user,
            'roles' => $roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
