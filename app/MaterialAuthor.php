<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialAuthor extends Model
{
    protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'website',
    ];

    public function material(){
      return $this->hasMany('App\Material');
    }
}
