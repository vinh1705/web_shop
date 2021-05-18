<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Users;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['slug', 'id_product', 'id_admin', 'title', 'content', 'img_banner'];
    protected $primaryKey = 'id';
    public $timestamps = true;

    /**
     * Get all of the comments for the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Product()
    {
        return $this->hasMany(Product::class, 'id_product', 'id');
    }

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Users()
    {
        return $this->belongsTo(Users::class, 'is_admin', 'id');
    }
}