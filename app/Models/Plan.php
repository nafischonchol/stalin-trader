<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Plan extends Model
{
    use GlobalStatus;
    
    public function invests()
    {
        return $this->hasMany(Invest::class);
    }

    public function timeSetting()
    {
        return $this->belongsTo(TimeSetting::class);
    }

    public function investsWithUserId($userId)
    {
        return $this->hasMany(Invest::class)
        ->where("status",1)
        ->where('next_time', '<=', now()->utc())
        ->whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        });
    }
}
