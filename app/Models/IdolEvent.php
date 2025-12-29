<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdolEvent extends Model
{
    protected $fillable = [
        'event_name',
        'event_date',
        'venue_id',
        'ticket_cost',
        'drink_cost',
        'note',
    ];

    public function venue()
    {
        return $this->belongsTo(IdolVenue::class, 'venue_id');
    }
}
