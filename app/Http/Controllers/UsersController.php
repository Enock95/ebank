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
       $users = User::orderBy('id', 'desc')->paginate(10);
      /// $profiles = Profile::orderBy('id', 'desc')->paginate(10);
    //    $userInfo = $users->merge($profiles);
       return view('admin.adduser.index', compact('users'));
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        $user = new User;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $imagePath = $destinationPath. "/".  $name;
                // $img = Image::make($thumbnailpath)->resize(188, 223, function($constraint) {
                // $constraint->aspectRatio()};
                $image->move($destinationPath, $name);
                $user->image = $name;
            }
              
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->username = $request->name;
            $user->password = bcrypt('password');
            //$user->save();
            // $profile = new Profile;
            //$profile->user_id = $user->id;
            $user->date = $request->date;
            $user-> number = $request->number;
            $user-> gender = $request->gender;
            $user-> name_empl = $request->name_empl;
            $user->salary = $request->salary;
            $user->residentiel = $request->residentiel;
               
            //$account = new Account;
           // $user-> user_id = $user->id;
            $user->account_no = $request->account_no;
            $user-> cot = $request->cot;
            $user-> tax = $request->tax;
            $user->imf = $request->imf;
            $user->atc = $request->atc;
            $user-> telex = $request->telex;
            $user->save();
            
        
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
    // public function edit(User $user)
    // {
    //     if (Gate::denies('edit-users')) {
    //         # code...
    //         return redirect()->route('admin.users.index');
    //     }
    //     $roles = Role::all();
    //     return view('admin.users.edit', [
    //         'user' => $user,
    //         'roles' => $roles
    //     ]);
    // }
     public function edit($id)
     {
        $user = User::find($id);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
         
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, User $user)
    // {
    //     $user->roles()->sync($request->roles);
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->save();
    //     return redirect()->route('admin.users.index');
    // }

   
    public function update(Request $request, $id)
    {
        $user = User::find($id);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads');
                $imagePath = $destinationPath. "/".  $name;
                // $img = Image::make($thumbnailpath)->resize(188, 223, function($constraint) {
                // $constraint->aspectRatio()};
                $image->move($destinationPath, $name);
                $user->image = $name;
            }
              
            $user->name     = $request->name;
            $user->email    = $request->email;
            $user->username = $request->name;
            
            //$user->save();
            // $profile = new Profile;
            //$profile->user_id = $user->id;
            $user->date = $request->date;
            $user-> number = $request->number;
            $user-> gender = $request->gender;
            $user-> name_empl = $request->name_empl;
            $user->salary = $request->salary;
            $user->residentiel = $request->residentiel;
            $user->save();
               
            //$account = new Account;
           // $user-> user_id = $user->id;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'number' => 'required',
            'date' => 'required',
            'gender' =>'required',
            'name_empl' =>'required',
            'salary' =>'required',
            'residentiel' =>'required',
            
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);
        
        
            $user->roles()->sync($request->roles);
            $user->update($request->all());
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
