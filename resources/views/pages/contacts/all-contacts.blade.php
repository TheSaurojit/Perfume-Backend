@extends('layout.app')



@section('body-section')
    <!-- start page title -->
    <div class="row">

        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Contact Us</h4>
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
                                    <th> Email</th>
                                    <th> Phone</th>
                                    <th> Submitted At</th>
                                    <th> Message</th>



                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>

                                        <td>{{ $contact->phone }}</td>

                                        <td>{{ $contact->created_at->format('d, M Y') }}</td>


                                        <td>{{ $contact->message }}</td>


                                            {{-- 
                                        <td>
                                            <a href="{{ route('contact.view', ['contact' => $contact->id]) }}"
                                                class="btn btn-success">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                        </td> --}}

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
