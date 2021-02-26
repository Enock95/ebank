<?php

namespace App\Http\Controllers;


use Keygen;

use App\User;
use Illuminate\Http\Request;

class AccountsController extends Controller
{   
    // modified generateNumericKey() method
    // Ensures non-zero integer at beginning of key

    protected function generateNumericKey()
    {
        // prefixes the key with a random integer between 1 - 9 (inclusive)
        return Keygen::numeric(10)->prefix(mt_rand(0, 9))->generate(true);
    }

    // generateID() method

    protected function generateID()
    {
        $id = $this->generateNumericKey();

        // Ensure ID does not exist
        // Generate new one if ID already exists
        while (User::whereId($id)->count() > 0) {
        $id = $this->generateNumericKey();
    }

        return $id;
    }  
    
    protected function generateCode()
    {
        return Keygen::bytes()->generate(
        function($key) {
            // Generate a random numeric key
            $random = Keygen::numeric()->generate();

            // Manipulate the random bytes with the numeric key
            return substr(md5($key . $random . strrev($key)), mt_rand(0,8), 20);
        },
        
            'strtoupper'
        );
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_balance.create');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
