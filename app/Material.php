<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
      'name',
      'description',
      'link',
      'material_type_id',
      'material_format_id',
      'material_status_id',
      'material_author_id',
      'language_id',
      'license_id',
      'is_sumitter_author',
    ];

    public function audiences(){
      return $this->belongsToMany('App\Audience');
    }

    public function language(){
      return $this->belongsTo('App\Language');
    }

    public function license(){
      return $this->belongsTo('App\License');
    }

    public function author(){
      return $this->belongsTo('App\MaterialAuthor');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function materialCategories(){
      return $this->belongsToMany('App\MaterialCategory');
    }

    public function materialStatus(){
      return $this->belongsTo('App\MaterialStatus');
    }

    public function materialType(){
      return $this->belongsTo('App\MaterialType');
    }


}
