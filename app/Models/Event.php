<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 */
class Event extends Model
{
    /**
     * @var array
     */
    protected $dates = [
        'start_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id', 'id');
    }

    /**
     * @param $query
     * @param $meetUpId
     */
    public function scopeFindByMeetUpId($query, $meetUpId)
    {
        $query->where('meetup_id', '=', $meetUpId);
    }
}
