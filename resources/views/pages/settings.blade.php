@extends('layout.app')



@section('body-section')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Settings</h4>


                    <form action="{{ route('settings') }}" method="POST">
                        @csrf


                        <x-form-field type="text" label="Bank Account Number" name="account_number" id="input-account_number"
                            placeholder="Enter Account Number" value="{{ $settings?->account_number }}" />

                            
                        <x-form-field type="text" label="Bank Account Name" name="account_name" id="input-account_name"
                            placeholder="Enter Account Name" value="{{ $settings?->account_name }}" />


                        <x-form-field type="text" label="Bank Ifsc Code" name="ifsc_code" id="input-ifsc_code"
                            placeholder="Enter Ifsc Code" value="{{ $settings?->ifsc_code }}" />

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary">Update </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
