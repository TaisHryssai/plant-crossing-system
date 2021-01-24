<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlantFeature extends Model
{
    /**
     * @var array
    */
    protected $fillable = [
    	'plant_id', 'feature_id'
    ];

    protected $table = 'plant_features';
}
