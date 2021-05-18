<?php

namespace App\City;

use Illuminate\Database\Eloquent\Model;
use App\City\CityVN;
use App\City\CommuneVN;
class DistrictVN extends Model
{
    protected $table = 'devvn_quanhuyen';
    protected $fillable = ['name', 'type', 'matp'];
    protected $primaryKey = 'maqh';
    public $timestamps = false;

    /**
     * Get the user that owns the DistrictVN
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function CityVN()
    {
        return $this->belongsTo(CityVN::class, 'matp', 'matp');
    }

    /**
     * Get all of the comments for the DistrictVN
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function CommuneVN()
    {
        return $this->hasMany(CommuneVN::class, 'maqh', 'maqh');
    }
}
