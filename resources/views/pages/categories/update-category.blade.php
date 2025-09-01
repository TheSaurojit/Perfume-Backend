@extends('layout.app')



@section('body-section')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Update Category</h4>

                <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <x-form-field
                        type="text"
                        label="Name"
                        name="name"
                        id="input-name"
                        placeholder="Enter Category Name"
                        :value="$category->name"
                    />

                   

                    {{-- Change image input --}}
                    <div class="mb-3">
                        <label for="input-image" class="form-label">Change Image</label>
                        <input type="file" class="form-control" name="image" id="input-image" accept="image/*" onchange="previewImage(event)">
                        <img src="{{ $category->image }}" id="image-preview" style="max-height: 200px; margin-top: 10px;" />
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
    const current = document.getElementById('current-image');

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            // preview.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection
