<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venue
 */
class Venue extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function events()
    {
        return $this->hasMany(Event::class, 'venue_id', 'id');
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
