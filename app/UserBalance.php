<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBalance extends Model
{
    protected $table = 'user_balance';
    /* The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'user_id','amount','operation','operator'
     ];
}
