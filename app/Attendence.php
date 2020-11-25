<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
	

	protected $table = 'Attendences';
     protected $fillable =['name','date','hour1','hour2','hour3','hour4','hour5', 'hour6','hour7','hour8'];
}
