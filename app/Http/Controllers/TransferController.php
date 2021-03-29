<?php

namespace App\Http\Controllers;

use App\User;
use App\Transfer;
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
                'bank_name'         =>'required',
                'receiver_name'     =>'required',
                'receiver_num'      =>'required',
                'receiver_country'  =>'required',
                'iban'              =>'required',
                'receiver_adresse'           =>'required',
                'amount'            =>'required'
            ]);
        
            $transfer = new Transfer;
                $transfer->bank_name = $request->bank_name;
                $transfer->receiver_num = $request->receiver_num;
                $transfer->receiver_name = $request->receiver_name;
                $transfer->receiver_country = $request->receiver_country;
                $transfer->iban = $request->iban;
                $transfer->receiver_adresse = $request->receiver_adresse;
                $transfer->amount = $request->amount;
                $transfer->save();
                return redirect()->route('verif_cot');
    }


    public function trans_cot(Request $request ){
       
        $user = User::where('cot', $request->vcot)->first();

            if ( ! $user == null)
            {
                return redirect()->route('verif_tax');
            }else return redirect()->route('cot.trans');

    }
    public function trans_tax(Request $request ){
       
        $user = User::where('tax', $request->vtax)->first();

            if ( ! $user == null)
            {
                return redirect()->route('verif_imf');
            }else return redirect()->route('tax.trans');

    }
    public function trans_imf(Request $request ){
       
        $user = User::where('imf', $request->vimf)->first();

            if ( ! $user == null)
            {
                return redirect()->route('verif_atc');
            }else return redirect()->route('imf.trans');

    }
    public function trans_telex(Request $request ){
       
        $user = User::where('telex', $request->vtelex)->first();

            if ( ! $user == null)
            {
                return redirect()->route('verif_validtion');
            }else return redirect()->route('telex.trans');

    }
    
}
