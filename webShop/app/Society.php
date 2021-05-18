<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Product;
class Society extends Model
{
    protected $table = 'society';
    protected $fillable = ['society', 'slug_soliety'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
