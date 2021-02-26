<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
    protected $fillable = ['user_id','image','number','date','gender','name_empl','type_empl','salary','residentiel'];

    public function getImage()
    {
        $imagePath = $this->image ?? 'avatars/default.jpg';

        return "/storage/" . $imagePath;
    }
}
