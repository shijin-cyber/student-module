<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	//protected $table = 'Student';
     protected $fillable =['name','age','address','total_perfomance'];
}
