@extends('layout.app')


@section('body-section')
    <div class="row">

        <div class="container py-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Order Dashboard</h4>

                <div class="dropdown" style="margin-right: 50px ;">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        {{ \Carbon\Carbon::create()->month((int) $month)->format('F') }}
                    </button>
                    <ul class="dropdown-menu">
                        @foreach (range(1, 12) as $m)
                            <li>
                                <a class="dropdown-item" href="{{ route('home', ['month' => $m]) }}">
                                    {{ \Carbon\Carbon::create()->month($m)->format('F') }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text h4 text-primary">{{ $totalOrders }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <p class="card-text h4 text-success">${{ number_format($totalSales, 2) }}</p>

                        </div>
                    </div>
                </div>
                

                <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title"> Orders Delivered</h5>
                            <p class="card-text h4 text-primary">{{ $ordersDelivered }}</p>
                        </div>
                    </div>
                </div>

                 <div class="col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title"> Orders Shipped</h5>
                            <p class="card-text h4 text-primary">{{ $ordersDelivered }}</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

    </div>
@endsection
