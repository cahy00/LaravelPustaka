<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name_category'];

    public function book()
    {
        return $this->hasOne('App\Book');
    }
}
