<?php

namespace App\City;

use Illuminate\Database\Eloquent\Model;
use App\City\District;
class CommuneVN extends Model
{
    protected $table = 'devvn_xaphuongthitran';
    protected $fillable = ['name', 'type', 'maqh'];
    protected $primaryKey = 'xaid';
    public $timestamps = false;

    /**
     * Get the user that owns the DistrictVN
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function District()
    {
        return $this->belongsTo(District::class, 'maqh', 'maqh');
    }
}
