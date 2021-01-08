<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    /**
     * @var array
    */
    protected $fillable = [
    	'name',
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    public function features()
    {
        return $this->belongsToMany('App\Feature', 'plant_feature', 'plant_id', 'feature_id');
    }
}