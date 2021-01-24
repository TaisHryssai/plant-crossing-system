<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Allele;

class Feature extends Model
{
    /**
     * @var array
    */
    protected $fillable = [
    	'name',
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function alleles()
    {
     return $this->HasMany(Allele::class, 'feature_id');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
    */
    public function plants()
    {
        return $this->belongsToMany('App\Plant', 'plant_features', 'plant_id', 'feature_id');
    }

    /**
    * @param string $term
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    public static function search($term)
    {
        if ($term) {
            $searchTerm = "%{$term}%";
            return Feature::where('name', 'LIKE', $searchTerm)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        }
        return Feature::orderBy('created_at', 'desc')->paginate(5);
    }
}
