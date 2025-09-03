<?php

namespace App\Http\Controllers;

use App\Helpers\FileUploader;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class OrderController extends Controller
{
    private $status = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];

    public function updateStatus(Request $request, Order $order)
    {
        $status = $request->input('status');
        if (!in_array($status, $this->status)) {
            return redirect()->back()->with('error', 'Invalid status update.');
        }
        $order->status = $status;
        $order->save();
        return redirect()->back()->with('success', 'Order status updated successfully.');
    }

    public function allOrder()
    {

        $orders = Order::with(['product', 'product.singleImage'])->latest()->get();

        return view('pages.orders.all-orders', compact('orders'));
    }

    public function show(Order $order)
    {
        return view('pages.orders.view', compact('order'));
    }

    public function updateView(Order $order)
    {
        return view('pages.orders.update', compact('order'));
    }

    public function update(Request $request, Order $order)
    {

        $data = $request->validate([
            'status' => 'required',
            'payment_status' => 'required'
        ]);

        $order->update($data);
        return redirect()->route('orders.all')->with('success', 'Order updated successfully.');
    }

    public function invoice(Order $order)
    {
        return view('pages.orders.invoice', compact('order'));
    }

    public function createOrder(Request $request)
    {

        try {
            $validated = $request->validate([
                'product_id'   => 'required|exists:products,id',
                'email'        => 'required|email',
                'name'         => 'required|string',
                'phone'        => 'required|string',
                'country'      => 'required|string',
                'state'        => 'required|string',
                'city'         => 'required|string',
                'zip_code'     => 'required|string',
                'address_line' => 'required|string',
                'payment_screenshot' => 'required|image',
                'quantity'     => 'required|integer|min:1',
                'price'        => 'required|numeric|min:0',
                'total_price'  => 'required|numeric|min:0',
            ]);


            do {
                $randomNumber = mt_rand(100000, 999999);
                $orderId = 'ORD-' . $randomNumber;
            } while (Order::where('id', $orderId)->exists());


            $order = Order::create([
                'id' => $orderId,
                'product_id' => $validated['product_id'],
                'email' => $validated['email'],
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'country' => $validated['country'],
                'state' => $validated['state'],
                'city' => $validated['city'],
                'zip_code' => $validated['zip_code'],
                'address_line' => $validated['address_line'],
                'payment_screenshot' => FileUploader::upload($validated['payment_screenshot']),
                'quantity' => $validated['quantity'],
                'price' => $validated['price'],
                'total_price' => $validated['total_price'],
                'status' => 'pending',
                'payment_status' => 'unverified',

            ]);


            $deliveryDate = now()->addDays(7);

            $adminMail = User::find(1)?->email ;

            Mail::to($order->email)
                ->cc($adminMail)
                ->send(new OrderMail($order, $deliveryDate));

            return response()->json(['message' => 'Order Created', 'data' => $order]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'message' => 'Validation failed',
                'errors'  => $e->errors(),
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Failed to create order',
                'errors'  => $e->getMessage(),
            ], 422);
        }
    }
}
