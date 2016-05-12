<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class UserProfile
 * @package App\Models
 */
class UserProfile extends Model
{

    public $table = 'user_profiles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $primaryKey = 'user_id';

    public $fillable = [
        'first_name',
        'last_name',
        'profile_picture',
        'dob',
        'address',
        'phone_number',
        'gender_id',
        'last_online'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'profile_picture' => 'string',
        'dob' => 'date',
        'address' => 'string',
        'phone_number' => 'string',
        'gender_id' => 'integer',
        'last_online' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
