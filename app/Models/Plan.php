<?php

namespace App\Models;

use App\Traits\GlobalStatus;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Log;

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
        $now = Carbon::now()->utc();
        $formattedTime = $now->format('Y-m-d H:i:s');
        // Log::info($formattedTime);
        // ei id ghula invest korte parbe na, have current invest
        return $this->hasMany(Invest::class)
        ->where("status",1)
        ->where('next_time', '>', $formattedTime)
        ->whereHas('user', function ($query) use ($userId) {
            $query->where('id', $userId);
        });
    }
}
