@extends('layout.app')



@section('body-section')
    <!-- start page title -->
    <div class="row">

        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Products</h4>
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
                                    <th>S No.</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Quantity</th>


                                    <th>Image</th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td class="{{ $product->status == 'published' ? 'text-success' : 'text-danger' }} ">{{ Str::title($product->status) }}</td>

                                        <td>{{ $product->quantity }}</td>


                                        <td>
                                            <img src="{{ $product->singleImage?->image_path }}" alt=""
                                                class="img-fluid" style="width: 100px; height: 100px;">

                                        </td>

                                        <td>
                                            <a href="{{ route('products.update', ['product' => $product->id]) }}"
                                                class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>


                                            @php
                                                $url = route('products.delete', ['product' => $product->id]);
                                            @endphp

                                            <a href="#" class="btn btn-danger"
                                                onclick="showDeleteModal('{{ $url }}')">
                                                <i class="fas fa-trash-alt"></i> </a>

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
