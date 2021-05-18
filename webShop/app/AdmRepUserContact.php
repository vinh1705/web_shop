<?php

namespace App;
use App\UserCart;
use Illuminate\Database\Eloquent\Model;

class AdmRepUserContact extends Model
{
    protected $table = 'adm_rep_user_contact';
    protected $fillable = ['id_user_cart', 'email', 'name', 'comment'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get all of the comments for the AdmRepUserContact
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserCart()
    {
        return $this->hasMany(UserCart::class, 'id_user_cart', 'id');
    }
}
