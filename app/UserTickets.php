<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTickets extends Model
{
    protected $table = 'user_ticket';
   /* The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'user_id','ticket_id'
    ];

    public function tickets(){
        return $this->belongsTo('App\Tickets','ticket_id','id');
    }
}
