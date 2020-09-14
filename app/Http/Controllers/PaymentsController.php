<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payment.index');
    }

    public function store()
    {
        request()->user()->notify(new PaymentReceived(909));
    }
}
