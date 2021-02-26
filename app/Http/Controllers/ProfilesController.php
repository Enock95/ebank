<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(user $user)
    {
        return view('dash.profile.create',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(user $user)
    {
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $data = request()->validate([
            'image' => 'sometimes|image|max:3000',
            'number' => 'required',
            'date' => 'required',
            'gender' => 'required',
            'name_empl' => 'required',
            'salary' => 'required',
            'residentiel' => 'required',
        ]);

        if (request('image')){
            # code...
            $imagePath = request('image')->store('avatars','public');
            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(800, 800);
            $image->save();

            auth()->user()->profile->update(array_merge(
                $data,
                ['image' => $imagePath]
                
            ));
        } else {
            auth()->$user->profile->update($data);
        }
        
        
        return redirect()->route('profiles.create',['user' => $user]);
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
