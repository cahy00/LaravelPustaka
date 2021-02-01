<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	protected $fillable = [
		'no_buku', 'judul', 'penerbit', 'penulis', 'isbn', 'stok', 'sinopsis', 'category_id', 'image'
	];

  public function credit()
  {
    	return $this->hasMany('App\Credit');
	}
	
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
