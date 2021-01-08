<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Feature;

class Allele extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
     'value',
     'name',
     'feature_id'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function feature()
    {
        return $this->BelongsTo(Feature::class, 'feature_id');
    }
}