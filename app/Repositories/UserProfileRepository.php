<?php

namespace App\Repositories;

use App\Models\UserProfile;
use InfyOm\Generator\Common\BaseRepository;

class UserProfileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserProfile::class;
    }
}
