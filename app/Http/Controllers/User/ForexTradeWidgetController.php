<?php

namespace App\Http\Controllers\User;

use App\Lib\HyipLab;
use App\Models\Plan;
use App\Models\Invest;
use App\Models\Transaction;
use App\Models\UserRanking;
use Illuminate\Http\Request;
use App\Models\GatewayCurrency;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Gateway\PaymentController;

class ForexTradeWidgetController extends Controller
{
    function widget()
    {
        $pageTitle  = 'Forex Trade Widget';
        return view($this->activeTemplate.'forex-widget',compact('pageTitle'));
    }
}
