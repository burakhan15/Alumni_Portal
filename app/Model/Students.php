<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
   protected $table="students";
   protected $fillable=['identify_id','school_id','name','birth_date','sur_name','country','department','graduation','start_date','gender','maps'];
}
