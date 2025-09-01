@extends('layout.app')


@section('body-section')


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Change Password </h4><br>


                                <form class="form-horizontal" action="{{ route('change-password') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="mb-3">
                                                <label for="email"> Enter Current Password</label>
                                                <input id="email" name="current_password" type="password"
                                                    class="form-control" placeholder="Enter Current Password">
                                            </div>

                                            <div class="mb-3">
                                                <label for="email"> Enter New Password</label>
                                                <input id="email" name="new_password" type="password"
                                                    class="form-control" placeholder="Enter New Password">
                                            </div>

                                            <div class="mb-3">
                                                <label for="email"> Confirm New Password</label>
                                                <input id="email" name="new_password_confirmation" type="password"
                                                    class="form-control" placeholder=" Confirm New Password">
                                            </div>

                                        </div>

                                    </div>



                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                        </button>

                                    </div>
                                </form>

                            </div>
                        </div>




                    </div>
                </div>



    </div>
@endsection
