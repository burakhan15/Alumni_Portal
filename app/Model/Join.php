<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
  
      protected $table="join_event";
  		 protected $fillable=['event_id','user_id'];
}
