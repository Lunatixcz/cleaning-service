<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Event\Code\Test;
use Psy\Readline\Hoa\Console;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $orders = Order::query()
            ->where('user_id', Auth::user()->id)
            ->where('payment_status', false)
            ->get();

        return view('users.order.index-order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.order.create-order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $width = $request->input('width');
        $length = $request->input('length');
        $floor_size = $width * $length;
        $duration = $request->input('duration');
        $estimated_price = $duration * 50000;

        $data = [
            'user_id' => $user_id,
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postal_code' => $request->input('postal_code'),
            'recipient_name' => $request->input('recipient_name'),
            'floor_size' => $floor_size,
            'number_of_floors' => $request->input('number_of_floors'),
            'total_personnel_ordered' => $request->input('total_personnel_ordered'),
            'estimated_price' => $estimated_price,
            'phone_number' => $request->input('phone_number'),
            'duration' => $duration,
        ];

        $order = Order::create($data);

        if ($request->action === 'save_order') {
            return redirect()->route('order.index');
        } elseif ($request->action === 'check_out') {
            return redirect()->route('payment.create', ['order' => $order]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('users.order.edit-order', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {

        $order->update($request->all());

        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
