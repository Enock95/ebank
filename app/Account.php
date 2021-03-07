<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['user_id','account_no','type_acc','balance','cot','tax','imf','atc','telex'];
}
