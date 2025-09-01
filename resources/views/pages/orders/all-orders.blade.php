@extends('layout.app')



@section('body-section')
    <!-- start page title -->
    <div class="row">

        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Orders</h4>
            </div>
        </div>

    </div>

    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-striped table-borderless table-centered">
                            <thead class="table-light">
                                <tr>


                                    <th scope="col">Order Id</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Product Image</th>

                                    <th scope="col">Ordered At</th>

                                    <th scope="col">Shipping Status</th>

                                    <th scope="col">Payment Status</th>

                                    <th scope="col">Actions</th>

                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product->title }}</td>

                                        <td>
                                            <img src="{{ $order->product->singleImage->image_path }}" alt=""
                                                class="img-fluid" style="width: 100px; height: 100px;">
                                        </td>

                                        <td>
                                            {{ $order->created_at->format('d/m/Y') }}
                                        </td>

                                        <td>
                                            {{ ucfirst($order->status) }}
                                        </td>

                                        <td>
                                            {{ ucfirst($order->payment_status) }}
                                        </td>

                                        <td>

                                            <a href="{{ route('orders.view', $order->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="{{ route('orders.update', $order->id) }}"
                                                class="btn btn-success btn-sm">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                             <a href="{{ route('orders.invoice', $order->id) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-file-invoice"></i>
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
