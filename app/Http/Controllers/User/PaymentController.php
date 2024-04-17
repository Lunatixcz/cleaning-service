<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::with('payment')->findOrFail($userId);
        $payments = $user->payment;

        return view('users.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Order $order)
    {
        return view('users.payment.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $order_id)
    {
        $data = [
            'payment_method' => $request->input('payment_method'),
            'order_id' => $order_id,
        ];

        payment::create($data);

        $order = Order::findOrFail($order_id);
        $order->payment_status = true;
        $order->save();

        return redirect()->route('payment.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(payment $payment)
    {
        return view('users.payment.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, payment $payment)
    {
        $payment = Payment::findOrFail($payment->id);

        $payment->status = $request->status_payment;
        $payment->save();

        if (Auth::user()->level == 'admin') {
            return redirect()->route('adminOrder.index');
        }
        return redirect()->route('payment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(payment $payment)
    {
        //
    }
}
