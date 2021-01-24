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

    protected $appends = [
        'image_path',
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    public function features()
    {
        return $this->belongsToMany('App\Feature', 'plant_features', 'plant_id', 'feature_id');
    }

    public function getImagePathAttribute()
    {
        if ($this->getOriginal('image') == null) {
            return '/assets/images/default/default-user.png';
        }
        return '/uploads/plant/' . '/' . $this->getOriginal('image');
    }

    public function saveWithoutEvents(array $options = [])
    {
        return static::withoutEvents(function () use ($options) {
            return $this->save($options);
        });
    }

    /**
    * @param string $term
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    public static function search($term)
    {
        if ($term) {
            $searchTerm = "%{$term}%";
            return Plant::where('name', 'LIKE', $searchTerm)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        }
        return Plant::orderBy('created_at', 'desc')->paginate(5);
    }
}