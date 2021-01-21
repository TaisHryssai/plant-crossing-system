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
        'image'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    public function features()
    {
        return $this->belongsToMany('App\Feature', 'plant_features', 'plant_id', 'feature_id');
    }

    public function saveWithoutEvents(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }
}