<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'phone_number',
        'gender_id',
        'title'
    ];

    protected $primaryKey = 'user_id';


    public function user(){
      return $this->belongsTo('App\User');
    }

}
