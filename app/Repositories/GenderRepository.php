<?php

namespace App\Repositories;

use App\Models\Gender;
use InfyOm\Generator\Common\BaseRepository;

class GenderRepository extends BaseRepository
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
        return Gender::class;
    }
}
