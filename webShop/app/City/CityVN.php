<?php

namespace App\City;

use Illuminate\Database\Eloquent\Model;
use App\City\DistrictVN;
class CityVN extends Model
{
    protected $table = 'devvn_tinhthanhpho';
    protected $fillable = ['name', 'type', 'slug'];
    protected $primaryKey = 'matp';
    public $timestamps = false;

    /**
     * Get all of the comments for the CityVn
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function DistrictVN()
    {
        return $this->hasMany(DistrictVN::class, 'matp', 'matp');
    }
}
