<?php

namespace App\Http\Controllers;

use App\User;
use App\Transfere;
use Illuminate\Http\Request;

class TransferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dash/transfer/create');
    }
    public function cot()
    {
        return view('dash/transfer/cot');
    }
    public function tax()
    {
        return view('dash/transfer/tax');
    }
    public function imf()
    {
        return view('dash/transfer/imf');
    }
    public function atc()
    {
        return view('dash/transfer/atc');
    }
    public function telex()
    {
        return view('dash/transfer/telex');
    }
    public function transfer()
    {
        return view('dash/transfer/transfer');
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

            ]);
        
           $trans = new Transfere;
           $trans->name = $request->name;
           $trans->receiver = $request->receiver;
           $trans->phone = $request->phone;
           $trans->name_empl = $request->name_empl;
           $trans->type_empl = $request->type_empl;
           $trans->cot = $request->cot;
           $trans->save();
           return redirect()->route('verif_cot');
    }


    public function trans(Request $request ){
       

      $cot = $_POST['cot'];
     $users = User::all();
     $users->cot = $request->cot;
    if($cot = $users->cot){
        return redirect()->route('verif_tax');
    }



    }
    
}
