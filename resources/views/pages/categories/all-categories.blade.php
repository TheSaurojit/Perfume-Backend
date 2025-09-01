@extends('layout.app')



@section('body-section')
    <!-- start page title -->
    <div class="row">

        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Categories</h4>
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

                                    <th> S No.</th>
                                    <th> Name</th>
                                    <th> Actions </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($categories as $cat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $cat->name }}</td>
                                        <td>
                                            <a href="{{ route('category.update', ['category' => $cat->id]) }}"
                                                class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            @php
                                                $url = route('category.delete', ['category' => $cat->id]);
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
