<?php

namespace App;

use App\InputClass;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'nis', 'nama', 'classroom_id', 'alamat', 'jenis_kelamin'
    ];

    public function inputclass()
    {
    	return $this->belongsTo('App\InputClass');
    }

    public function credit()
    {
    	return $this->hasOne('App\Credit');
    }
}
