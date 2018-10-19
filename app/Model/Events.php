<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
      protected $table="events";
  		 protected $fillable=['headline','description','address','datetime','content'];
}
