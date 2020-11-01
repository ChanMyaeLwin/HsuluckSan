<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    /* The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name','owner','status','times_id'
    ];
}
