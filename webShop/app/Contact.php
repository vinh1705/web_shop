<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "user_contact";
    protected $fillable = ['name', 'email', 'ram', 'categories_contact', 'conmment'];
    protected $primaryKey = 'id';
    public $timestamps = true;
}
