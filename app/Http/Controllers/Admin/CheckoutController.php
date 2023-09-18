<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Mail\Checkout\Paid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        
        // send email after save to db
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success',"Checkout with id {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}