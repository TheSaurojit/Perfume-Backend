@extends('layout.app')



@section('body-section')
    <div class="col-md-8 offset-md-2">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Order Details</h4>
            </div>
            <div class="card-body">



                {{-- Order Status --}}
                {{-- <form id="statusForm" action="{{ route('orders.update-status', ['order' => $order->id]) }}" method="POST">
                    @csrf
                    <label for="status"><strong>Status:</strong></label>
                    <select name="status" id="statusSelect" class="form-select form-select-sm w-auto d-inline-block"
                        style="color: orange; border: 1px solid orange;">

                        @php

                            $status = ['pending', 'processing', 'shipped', 'delivered', 'cancelled'];

                        @endphp

                        @foreach ($status as $stat)
                            <option value="{{ $stat }}" @if ($order->status == $stat) selected @endif
                                style="color: white">
                                {{ ucfirst($stat) }}
                            </option>
                        @endforeach

                    </select>
                </form> --}}

                <p><strong>Shipping Status:</strong> {{ ucfirst($order->status) }}</p>

                <p><strong>Payment Status:</strong> {{ ucfirst($order->payment_status) }}</p>

                {{-- Order Info --}}
                <p><strong>Order ID:</strong> {{ $order->id }}</p>
                <p><strong>Customer Name:</strong> {{ $order->name }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Ordered At:</strong> {{ $order->created_at->format('d M , Y') }}</p>


                {{-- Shipping Info --}}
                <h5 class="mt-4">Shipping Address</h5>
                
                <p><strong>Country :</strong> {{ $order->country }}</p>
                
                <p><strong>State:</strong> {{ $order->state }}</p>

                <p><strong>City:</strong> {{ $order->city }}</p>


                <p><strong>Zip Code:</strong> {{ $order->zip_code }}</p>

                <p><strong>Address:</strong> {{ $order->address_line }}</p>

                <h5 class="mt-4">Payment Screenshot</h5>

                <div class="mb-3">
                    <img src="{{ $order->payment_screenshot }}" alt="Product Image" class="img-fluid"
                        style="max-width: 200px;">
                </div>


                {{-- Product Info --}}
                <h5 class="mt-4">Product Info</h5>

                <div class="mb-3">
                    <img src="{{ $order->product->singleImage->image_path }}" alt="Product Image" class="img-fluid"
                        style="max-width: 200px;">
                </div>

                <p><strong>Product ID:</strong> {{ $order->product_id }}</p>
                <p><strong>Product Name:</strong> {{ $order->product->title }}</p>
                <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                <p><strong>Price per Item:</strong> €{{ number_format($order->price, 2) }}</p>
                <p><strong>Shipping Tax:</strong> €{{ number_format(35, 2) }}</p>


                {{-- Payment Info --}}

                <p><strong>Total Amount:</strong> €{{ number_format($order->total_price, 2) }}</p>


            </div>
        </div>

        {{-- Back Button --}}
        <div class="mt-3">
            <a href="{{ route('orders.all') }}" class="btn btn-secondary">Back to Orders</a>
        </div>

    </div>
@endsection

@section('script-section')
    <script>
        document.getElementById('statusSelect').addEventListener('change', function() {
            document.getElementById('statusForm').submit();
        });
    </script>
@endsection
