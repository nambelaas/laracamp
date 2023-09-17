<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        $request->session()->flash('success',"Checkout with id {$checkout->id} has been updated!");
        return redirect(route('admin.dashboard'));
    }
}
