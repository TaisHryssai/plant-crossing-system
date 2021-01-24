<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrossPlant extends Model
{
        /**
     * @var array
    */
    protected $fillable = [
    	'plant_id'
    ];

    /**
    * @param string $term
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    public static function search($term)
    {
        if ($term) {
            $searchTerm = "%{$term}%";
            return CrossPlant::where('name', 'LIKE', $searchTerm)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        }
        return CrossPlant::orderBy('created_at', 'desc')->paginate(5);
    }
}
