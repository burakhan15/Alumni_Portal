<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
         protected $table="messages";
  		 protected $fillable=['headline','desctription','content','sender','receiver','created_at','updated_at'];
  		
  }
