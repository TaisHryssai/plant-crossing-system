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
        return $this->belongsToMany('App\Plant', 'plant_feature', 'plant_id', 'feature_id');
    }
}
