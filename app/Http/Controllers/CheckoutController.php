<?php

namespace App\Http\Controllers;
use App\Event;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function charge(Request $request, $id)
    {
        try {
            $event = Event::find($id);

            Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source'  => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount'   => 1999,
                'currency' => 'usd'
            ));

            return redirect('/events/'.$event->id)->with('success', 'Donation made. Your contribution is appreciated.');
        } catch (\Exception $e) {
            return redirect('/events')->with('success', 'Event has been added');
        }
    }
}
