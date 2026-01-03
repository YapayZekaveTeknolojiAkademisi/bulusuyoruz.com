<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventResult extends Model
{
    protected $fillable = [
        'event_id',
        'suggested_location',
        'suggested_date',
        'suggested_time',
        'reasoning',
    ];

    protected $casts = [
        'suggested_date' => 'date',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
