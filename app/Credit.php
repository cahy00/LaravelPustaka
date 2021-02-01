<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
	protected $fillable = [
		'book_id', 'student_id', 'tgl_pinjam', 'tgl_kembali'
	];

    public function book()
    {
    	return $this->belongsTo('App\Book');
    }

    public function student()
    {
    	return $this->belongsTo('App\Student');
    }
}
