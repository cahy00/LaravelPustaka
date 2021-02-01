<?php

namespace App;

use App\Student;
use Illuminate\Database\Eloquent\Model;

class InputClass extends Model
{
    protected $table = 'classrooms';
    protected $fillable = [
    	'classname'
    ];

    public function student()
    {
    	return $this->hasMany('App\Student');
    }
}
