@extends('layout.app')



@section('body-section')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Create Category</h4>

                    <form action="{{ route('category.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <x-form-field type="text" label="Name" name="name" id="input-name"
                            placeholder="Enter Category Name" />

                        {{-- Image upload --}}
                        <div class="mb-3">
                            <label for="input-image" class="form-label">Category Image</label>
                            <input class="form-control" type="file" name="image" id="input-image" accept="image/*"
                                onchange="previewImage(event)">
                            <img id="image-preview" src="#" alt="Preview"
                                style="display:none; max-height: 200px; margin-top: 10px;" />
                        </div>

                        <x-form-field type="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script-section')
    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
