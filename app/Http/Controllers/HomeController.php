<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //
    public function home(Request $request)
    {

        // $details = [
        //     'name' => 'John Doe',
        //     'order_id' => 'ORD-123456',
        //     'amount' => '59.99',
        // ];

        // Mail::to('saurojitkarmakar947@gmail.com')->send(new OrderMail($details));

        $month = $request->get('month', now()->format('m'));
        $year = now()->format('Y');

        $totalOrders = Order::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->count();


        $totalSales = Order::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->where('status', 'delivered')
            ->sum('total_price');

        $ordersDelivered = Order::whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->where('status', 'delivered')
            ->count();


        // $ordersShipped = Order::whereMonth('created_at', $month)
        //     ->whereYear('created_at', $year)
        //     ->where('status', 'delivered')
        //     ->count() ;

        return view('home', compact('totalOrders', 'totalSales', 'month', 'ordersDelivered'));
    }
}
