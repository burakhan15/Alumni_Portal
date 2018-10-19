<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name', 'sur_name','email','birth_date','start_date','graduated_date','school_id','	identity_id','department','country','password','auth','provider', 'provider_id','image'
        /*'name', 'email','sur_name','start_school','end_school','student_id','department','country','password',*/
    ];
    protected $table="users";
}
