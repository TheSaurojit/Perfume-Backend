@extends('layout.app')



@section('body-section')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Order</h4>

 
                    <form action="{{ route('orders.update', ['order' => $order->id]) }}" method="POST">
                        @csrf


                        <div class="row mb-4">
                            <label for="input-image" class="col-sm-3 col-form-label">Shipping Status</label>
                            <select name="status" id="statusSelect"
                                class="form-select form-select-sm w-auto d-inline-block">

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

                        </div>


                        <div class="row mb-4">
                            <label for="input-image" class="col-sm-3 col-form-label">Payment Status</label>
                            <select name="payment_status" id="statusSelects"
                                class="form-select form-select-sm w-auto d-inline-block">

                                @php

                                    $status = ['unverified', 'verified'];

                                @endphp

                                @foreach ($status as $stat)
                                    <option value="{{ $stat }}" @if ($order->payment_status == $stat) selected @endif
                                        style="color: white">
                                        {{ ucfirst($stat) }}
                                    </option>
                                @endforeach

                            </select>

                        </div>


                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">Update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
